<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Banner;
use File;
use Illuminate\Support\Facades\Mail;


class BannerController extends Controller
{

    public function index()
    {
        $banner = Banner::paginate(5);
        $data = compact('banner');
        return view('backend.view-banner')->with($data);
    }

    public function add_banner()
    {
        $title = "Add Banner";
        $url = url('admin/banner/create/');
        $data = compact('url', 'title');
        return view('backend.add-banner')->with($data);
    }
    public function store(Request $request)
    {

        if ($request->validate(
            [
                'tagline' => 'required',
                'image' => 'required'
            ]
        )) {

            $bannerImageArr = array();

            // check if has file
            if ($request->hasFile('image')) {
                $files = $request->file('image');


                // loop of all files
                foreach ($files as $key => $image) {
                    // store file name with extension
                    $fileName = time() . $key . '.' . $image->getClientOriginalExtension();
                    $bannerImageArr[] = $fileName;

                    // upload image to uploads folder
                    $image->storeAs('public/images', $fileName);
                }
            }

            $bannerImage = implode(',', $bannerImageArr);

            // create object of model banner
            $modelBanner = new Banner;

            $modelBanner->tagline = $request['tagline'];

            $modelBanner->image = $bannerImage;
            $modelBanner->save();
        }

        return redirect('/admin/banner/');
    }
    public function edit($id)
    {

        $banner = Banner::find($id);
        if (is_null($banner)) {


            return redirect('admin/banner');
        } else {
            $title = "Update Banner";
            $url = url('admin/banner/update') . "/" . $id;
            $data = compact('banner', 'url', 'title');
            return view('backend.add-banner')->with($data);
        }
    }

    public function update(Request $request, $id)
    {
        $bannerImageArr = array();

        // check if has file
        if ($request->hasFile('image')) {
            $files = $request->file('image');


            // loop of all files
            foreach ($files as $key => $image) {
                // store file name with extension
                $fileName = time() . $key . '.' . $image->getClientOriginalExtension();
                $bannerImageArr[] = $fileName;

                // upload image to uploads folder
                $image->storeAs('public/images', $fileName);
            }
        }

        $banner = Banner::find($id);
        $banner->tagline = $request['tagline'];

        // convert image string to array
        $imageArr = explode(',', $banner->image);

        // merge old array with new array
        $newImageArr = array_merge($imageArr, $bannerImageArr);

        // convert array to string
        $bannerImage = implode(',', $newImageArr);

        $banner->image = $bannerImage;
        $banner->save();

        return redirect('admin/banner/');
    }

    public function delete($id)
    {

        $banner = Banner::find($id);
        $multiple_image_array = explode(',', $banner->image);

        if (is_null($banner)) {
            return redirect('admin/banner');
        } else {
            if (count($multiple_image_array) > 1) {

                foreach ($multiple_image_array as $images) {

                    File::delete(public_path("storage/images/" . $images));
                    $banner->delete();
                }
                return redirect('admin/banner');
            } else {
                //delete image in folder also
                unlink("storage/images/" . $banner->image);

                $banner->delete();

                return redirect('admin/banner');
            }
        }
    }

    // delte image
    public function deleteImage($id, $image) {

        $banner = Banner::find($id);

        // convert image string into array
        $imageArr = explode(',', $banner->image);

        // check if image in array
        if(in_array($image, $imageArr)) {
            // serach image in array and retrun key
            $key = array_search($image, $imageArr);

            // delete from array
            unset($imageArr[$key]);
            unlink("storage/images/" . $image);
        }

        // convert array into string
        $bannerImage = implode(',', $imageArr);

        $banner->image = $bannerImage;
        $banner->save();

        return redirect('admin/banner/edit/'. $id);
    }
}

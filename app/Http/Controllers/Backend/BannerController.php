<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Banner;
use File;
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
        $data = compact('url','title');
        return view('backend.add-banner')->with($data);
    }
    public function store(Request $request)
    {
        $bannerImageArr = array();

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
                    $image->storeAs('public/images',$fileName);
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
        if(is_null($banner)){


            return redirect('admin/banner');

        }else{
            $title = "Update Banner";
            $url = url('admin/banner/update')."/".$id;
            $data = compact('banner','url','title');
            return view('backend.add-banner')->with($data);
        }

    }

    public function update(Request $request,$id)
    {

        $banner = Banner::find($id);
        $banner->tagline = $request['tagline'];
        $banner->image= $request->file('image')->store('public/uploads');
        $banner->save();
        return redirect('admin/banner/');

    }

    public function delete($id)
    {

        $banner = Banner::find($id);
        $multiple_image_array = explode(',',$banner->image);

        if(is_null($banner))
        {
            return redirect('admin/banner');
        }else{
                if (count($multiple_image_array) > 1)
                {

                    foreach($multiple_image_array as $images)
                    {

                        File::delete(public_path("storage/images/".$images));
                        $banner->delete();
                    }
                    return redirect('admin/banner');

                } else {
                    //delete image in folder also
                        unlink("storage/images/".$banner->image);

                        $banner->delete();

                        return redirect('admin/banner');

                }

            }

    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;

use App\Models\Banner;

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
        $banner = new Banner;
        $banner->tagline = $request['tagline'];
        //$banner->image= $request->file('image')->store('public/uploads');
        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->extension();

        $destinationPath = public_path('/thumbnail');
        $img = ImageResize::make($image->path());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);

        $destinationPath = public_path('/image');
        $image->move($destinationPath, $input['imagename']);

 Image::create(['image' => $input['imagename'], 'thumbnail' => $input['imagename']]);

        return back()
            ->with('success','Successfully Save Your Image file')
            ->with('imageName',$input['imagename']);

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

        if(is_null($banner)){
            return redirect('admin/banner');
        }else{

            $banner->delete();
            return redirect('admin/banner');
        }


    }

}

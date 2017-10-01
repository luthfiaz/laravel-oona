<?php

namespace App\Http\Controllers;

// use Image;
use File;
use App\Images;
use Illuminate\Http\Request;

class ImageController extends Controller
{
	public function index()
	{
		// R of CRUD
		$image = Images::all();

        $title = 'Content';

		return view('table', compact('image', 'title'));
	}

	public function select( $id )
	{
		// Selected image will be shown on the front page
		$refresh = Images::where('select', 1)->update(['select' => 0]);

		$select = Images::find( $id );
		$select->select = 1;
		$select->save();

        $title = 'Content';

		return back();
	}

	public function form()
	{
        $title = 'Content';

		return view('form', compact('title'));
	}

    public function create( Request $request )
    {
    	// C of CRUD
    	$img = $request->file('picture');
        $imgname = preg_replace('/\s+/', '-', $request->name).'.'.$img->getClientOriginalExtension();
        $imgpath = public_path('new/images/');
        $img->move($imgpath, $imgname);

        $dbpath = 'public/new/images/'.$imgname;

        $image = new Images;

        $image->name = $request->name;
        $image->source = $dbpath;
        $image->save();

        return back();

    }

    public function edit( $id )
    {
    	// U of CRUD
        $img = Images::find( $id );

        $title = 'Content';

        return view('edit', compact('img', 'title'));
    }

    public function update( Request $request )
    {
    	// U of CRUD
        $update = Images::find( $request->id );

        $oldname = $update->name;
        
        if ( !empty($request->file('picture')) )
        {
            $img = $request->file('picture');
            $imgname = preg_replace('/\s+/', '-', $request->name).'.'.$img->getClientOriginalExtension();
            $imgpath = public_path('new/images/');
            $img->move($imgpath, $imgname);

            $dbpath = 'public/new/images/'.$imgname;

            $update->source = $dbpath;

            $oldimg = preg_replace('/\s+/', '-', $oldname).'.jpg';

            // dd($oldimg);

            File::delete(public_path('new/images/'.$oldimg));
        }

        $update->name = $request->name;
        $update->save();

        return back();

    }

    public function delete( $id )
    {
    	// D of CRUD
    	$delete = Images::find( $id );

        $imgname = preg_replace('/\s+/', '-', $delete->name).'.jpg';

        File::delete(public_path('new/images/'.$imgname));

    	$delete->delete();

    	return back();
    }
}

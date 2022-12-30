<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;




class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gallery');
    }
      
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $user = Auth::user(); //$user->id to keep the info on who added the photo
        //dd($user->id);
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
      
        $imageName = time();
        //$imageName = time().'.'.$request->image->extension();  
        //$imageName = '0test'.'.'.$request->image->extension();
        //dd($request->productType);  
       /*
        Need to move to different folders according to image category:
       */

        if($request->productType==1)
        {
            $request->image->move(public_path('images/Vivatels-gallery/window'), $imageName);
            // Store the record, using the new file hashname which will be it's new filename identity.
            $product = new Product([
                "type" => $request->productType,
                "name" => $imageName,
                "file_path" => 'images/Vivatels-gallery/window/'.$imageName,
                "userId" => $user->id
            ]);
            $product->save(); // Finally, save the record.
        
        }
            
        if($request->productType==2){
            $request->image->move(public_path('images/Vivatels-gallery/outdoor'), $imageName);
            // Store the record, using the new file hashname which will be it's new filename identity.
            $product = new Product([
                "type" => $request->productType,
                "name" => $imageName,
                "file_path" => 'images/Vivatels-gallery/outdoor/'.$imageName,
                "userId" => $user->id
            ]);
            $product->save(); // Finally, save the record.
        }
            
        if($request->productType==3){
            $request->image->move(public_path('images/Vivatels-gallery/indoor'), $imageName);
             // Store the record, using the new file hashname which will be it's new filename identity.
             $product = new Product([
                "type" => $request->productType,
                "name" => $imageName,
                "file_path" => 'images/Vivatels-gallery/indoor/'.$imageName,
                "userId" => $user->id
            ]);
            $product->save(); // Finally, save the record.
        }
            
        if($request->productType==4){
            $request->image->move(public_path('images/Vivatels-gallery/kitchen'), $imageName);
             // Store the record, using the new file hashname which will be it's new filename identity.
             $product = new Product([
                "type" => $request->productType,
                "name" => $imageName,
                "file_path" => 'images/Vivatels-gallery/kitchen/'.$imageName,
                "userId" => $user->id
            ]);
            $product->save(); // Finally, save the record.
        }
            
        if($request->productType==5){
            $request->image->move(public_path('images/Vivatels-gallery/steps'), $imageName);
             // Store the record, using the new file hashname which will be it's new filename identity.
             $product = new Product([
                "type" => $request->productType,
                "name" => $imageName,
                "file_path" => 'images/Vivatels-gallery/steps/'.$imageName,
                "userId" => $user->id
            ]);
            $product->save(); // Finally, save the record.
        }
            
        return back()
            ->with('success', __('messages.photoIsUploaded'))
            ->with('image',$imageName); 
    }

  // ---------------- [ Delete image ] ----------------
    public function deleteImage(Request $request) {
        $imageName = substr($request->id, -10, 10); //last 10 characters is image name
        $currentUserID = Auth::user()->id;
        $photoUserID = Product::where("name", $imageName)->first();
        //dd($imageName);

        if(File::exists($request->id)
        && $currentUserID == $photoUserID->userId
        ) {
            File::delete($request->id); //delete from public folder
            Product::where("name", $imageName)->delete(); //delete from DB
            return back()->with("success", __('messages.photoIsDeleted'));
        }
        
        else
        {
            return redirect()->back() ->with('warning',  __('messages.cannotDeletePhoto'));
        }

    }
}
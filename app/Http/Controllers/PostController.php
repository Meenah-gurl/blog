<?php
    namespace App\Http\Controllers;

    use Inertia\Inertia;
    use Illuminate\Http\Request;
    use App\Models\gallery;
    use App\Models\Advert;
    use App\Models\Shop;
    use Intervention\Image\ImageManagerStatic as Image;


    class PostController extends Controller
    {

        public function addGallery(Request $request)
        {
            if($request->hasFile('image')){
                //get Image
                $image = $request->file('image');
                //Get the Original File Name and path
                $thumbnail = $image->getClientOriginalName();
                //Get the filename only using native php 'pathinfo'
                $filename = pathinfo($thumbnail, PATHINFO_FILENAME);
                //Extract the Extension
                $ext = 'webp';
                $nameToStore = $filename . '_'. time() .'.'. $ext;
                $image_resize = Image::make($image->getRealPath())->encode('webp', 100);
                $image_resize->resize(600,  null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                if($image_resize->save(public_path() . '/storage/categories/images/'.$nameToStore )){
                    $saveGallery = new gallery;
                    $saveGallery->style = $request->style;
                    $saveGallery->description = $request->description;
                    $saveGallery->image = $nameToStore;
                    if($saveGallery->save()){
                        return response()->json([
                            'status' => 'success',
                            'message' => 'Saved successfully'
                        ], 200);
                    }else{
                        unlink(public_path() . '/storage/categories/images/'.$nameToStore);
                        return response()->json([
                            'status' => 'error',
                            'message' => 'Could not save event records due to an unexpected error.'
                        ], 502);
                    }
                }else{
                    return json_encode([
                        'status' => 'error',
                        'message' => 'Network error occured'
                    ]);
                }
            }else{
                return response()->json([
                    'status' => 'error',
                    'message' => 'No image found for event upload!'
                ]);
            }
        }

        // for sales item

        public function addShop(Request $request)
        {
            if($request->hasFile('image')){
                //get Image
                $image = $request->file('image');
                //Get the Original File Name and path
                $thumbnail = $image->getClientOriginalName();
                //Get the filename only using native php 'pathinfo'
                $filename = pathinfo($thumbnail, PATHINFO_FILENAME);
                //Extract the Extension
                $ext = 'webp';
                $nameToStore = $filename . '_'. time() .'.'. $ext;
                $image_resize = Image::make($image->getRealPath())->encode('webp', 100);
                $image_resize->resize(600,  null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                if($image_resize->save(public_path() . '/storage/shop/images/'.$nameToStore )){
                    $saveShop = new shop;
                    $saveShop->description = $request->description;
                    $saveShop->image = $nameToStore;
                    $saveShop->price = $request->price;
                    if($saveShop->save()){
                        return response()->json([
                            'status' => 'success',
                            'message' => 'Saved successfully'
                        ], 200);
                    }else{
                        unlink(public_path() . '/storage/shop/images/'.$nameToStore);
                        return response()->json([
                            'status' => 'error',
                            'message' => 'Could not save event records due to an unexpected error.'
                        ], 600);
                    }
                }else{
                    return json_encode([
                        'status' => 'error',
                        'message' => 'Network error occured'
                    ]);
                }
            }else{
                return response()->json([
                    'status' => 'error',
                    'message' => 'No image found for event upload!'
                ]);
            }
        }


        public function delete_img(Request $request){

            $image = gallery::where('id',$request->id)->first();
            
            unlink(public_path() . '/storage/categories/images/'. $image ->image);
    
            $image ->delete();
    
            return json_encode([
                'status' => 'success',
                'message' => 'Image deleted successfully'
            ]);
    
        }


        public function addAdvert(Request $request)
        {
            if($request->hasFile('image')){
                //get Image
                $image = $request->file('image');
                //Get the Original File Name and path
                $thumbnail = $image->getClientOriginalName();
                //Get the filename only using native php 'pathinfo'
                $filename = pathinfo($thumbnail, PATHINFO_FILENAME);
                //Extract the Extension
                $ext = 'webp';
                $nameToStore = $filename . '_'. time() .'.'. $ext;
                $image_resize = Image::make($image->getRealPath())->encode('webp', 100);
                $image_resize->resize(600,  null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                if($image_resize->save(public_path() . '/storage/advert/images/'.$nameToStore )){
                    $saveAdvert = new advert;
                    $saveAdvert ->image = $nameToStore;
                    if($saveAdvert ->save()){
                        return response()->json([
                            'status' => 'success',
                            'message' => 'Saved successfully'
                        ], 200);
                    }else{
                        unlink(public_path() . '/storage/advert/images/'.$nameToStore);
                        return response()->json([
                            'status' => 'error',
                            'message' => 'Could not save event records due to an unexpected error.'
                        ], 600);
                    }
                }else{
                    return json_encode([
                        'status' => 'error',
                        'message' => 'Network error occured'
                    ]);
                }
            }else{
                return response()->json([
                    'status' => 'error',
                    'message' => 'No image found for event upload!'
                ]);
            }
        }



    }
?>
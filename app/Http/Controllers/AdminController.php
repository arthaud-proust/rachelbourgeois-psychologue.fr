<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use App\Models\Section;
use Validator;
use Session;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }



    public function index()
    {
        $short_sections = Section::select('id','order','type','title', 'image_url', 'anchor', 'appointement_before')->orderBy('order')->get();
        return view('admin.index', compact('short_sections'));
    }



    public function createSection()
    {
        return view('section.create');
    }

    public function storeSection(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'type' => 'required|string',
            'content' => 'required',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp'
        ]);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $sectionBody = [
            'title' => request('title'),
            'type' => request('type'),
            'content' => request('content'),
            'appointement_before' => $request->has('appointement_before'),
            'anchor' => $request->has('anchor'),
            'order' => Section::max('order')+1
        ];

        if(request('image_url')) {
            // try {
            //     if($user->img !="/assets/profiles/user.png") {
            //         File::delete(public_path().$user->img);
            //     }
            // } catch(Exception $e) {
            //     // nothing
            // };
    
            $imageName = Str::orderedUuid().'.'.request('image_url')->getClientOriginalExtension();
            request('image_url')->move(public_path('img/'), $imageName);
    
            // $user->img = '/assets/profiles/'.$imageName;
            // $user->save();

            $sectionBody['image_url'] = $imageName;
        }

        $section = Section::create($sectionBody);

        return redirect()->route('admin');
    }



    public function editSection(Request $request, $id)
    {
        $section =  Section::firstWhere('id', $id);
        return view('section.edit', compact('section'));
    }

    public function updateSection(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'content' => 'required',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp'
        ]);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        if(!$section = Section::firstWhere('id', $id)) {
            return abort(404);
        }
        $section->title = request('title');
        $section->content = request('content');
        $section->appointement_before = $request->has('appointement_before');
        $section->anchor = $request->has('anchor');
        $section->title = request('title');

        if(request('image_url')) {
            try {
                File::delete(public_path('img/').$section->image_url);
            } catch(Exception $e) {
                // nothing
            };
            $imageName = Str::orderedUuid().'.'.request('image_url')->getClientOriginalExtension();
            request('image_url')->move(public_path('img/'), $imageName);
    

            $section->image_url = $imageName;
        }

        $section->save();

        return redirect()->route('admin');
    }



    public function destroySection(Request $request, $id) {
        if(!$section = Section::firstWhere('id', $id)) {
            return abort(404);
        }

        try {
            File::delete(public_path('img/').$section->image_url);
        } catch(Exception $e) {
            // nothing
        };
        
        $section->delete();

        return redirect()->route('admin');
    }



    public function updateOrders(Request $request) {
        $validator = Validator::make($request->all(), [
            'orders' => 'required|json',
        ]);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }
        $orders = json_decode(request('orders'), true);
        foreach($orders as $id => $order) {
            Section::where('id', $id)->update(['order'=>$order]);
        }
        return redirect()->route('admin');
    }
}

<?php

namespace App\Http\Controllers;

use App\Post;
use App\Services\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    use PostService;

    public function __construct()
    {
        $posts = DB::table('posts')->get();
        $user = DB::table('users')->first();
        $logo_page = $posts->where('position', 'logo_page')->first();
        $footer_page = $posts->where('position', 'footer_page')->first();
        $content_four = $posts->where('position', 'content_four')->first();
        view()->share('logo_page', $logo_page);
        view()->share('footer_page', $footer_page);
        view()->share('content_four', $content_four);
        view()->share('user', $user);
    }

    public function showView()
    {
        $posts = DB::table('posts')->get();
        $user = DB::table('users')->first();
        $post = [];
        $post['title_page'] = $posts->where('position', 'title_page')->first();
        $post['content_one'] = $posts->where('position', 'content_one')->first();
        $post['content_two'] = $posts->where('position', 'content_two')->first();
        $post['content_three'] = $posts->where('position', 'content_three')->first();
        $post['content_four'] = $posts->where('position', 'content_four')->first();
        $post['post_left'] = $posts->where('position', 'post_left')->first();
        $post['post_center'] = $posts->where('position', 'post_center')->first();
        $post['post_right'] = $posts->where('position', 'post_right')->first();
        return view('index', ['post' => $post, 'user' => $user]);
    }

    public function showPost()
    {
        $posts = DB::table('posts')->paginate(10);
        return view('admin.posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->except(['_token', 'image']);
        if(!$request->position) {
            $data['position'] = "common";
        }
        $imagesFile = ['image'];
        foreach ($imagesFile as $imageFile) {
            if ($request->hasFile($imageFile)) {
                $data[$imageFile] = $this->updateImage($request->file($imageFile));
            }
        }
        Post::create($data);
        return redirect()->route('posts.index');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.posts.update', ['post' => $post]);
    }

    public function update(Request $request)
    {
        $data = $request->except(['_token', 'image']);
        $imagesFile = ['image'];

        foreach ($imagesFile as $imageFile) {
            if ($request->hasFile($imageFile)) {
                $data[$imageFile] = $this->updateImage($request->file($imageFile));
            }
        }

        Post::where('id', $request->id)->update($data);

        return redirect()->route('posts.index')->with('message', 'Sửa bài đăng thành công!!');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index');
    }

    public function news()
    {
        $posts = DB::table('posts')->where('position', '=', 'common')->get();
        $post['hot_news'] = $posts->first();
        $post['three_news'] = $posts->skip(1)->take(3);
        $postPan = DB::table('posts')->where('position', '=', 'common')->skip(4);
        $postsNormal = $postPan->paginate(10);
        return view('news.index', ['post' => $post, "postsNormal" => $postsNormal]);
    }

    public function details($id)
    {
        $post = Post::find($id);
        return view('detail.index', ['post' => $post]);
    }

    public function mainService()
    {
        $post = DB::table('posts')->where('position', '=', 'main_service')->first();
        return view('service_bocxep.index', ['post' => $post]);
    }

    public function movingHouse()
    {
        $post = DB::table('posts')->where('position', '=', 'moving_house')->first();
        return view('moving_house.index', ['post' => $post]);
    }

    public function contactPage()
    {
        $post = DB::table('posts')->where('position', '=', 'contact')->first();
        return view('contact.index', ['post' => $post]);
    }

    public function breakWall()
    {
        $post = DB::table('posts')->where('position', '=', 'break_wall')->first();
        return view('break_wall.index', ['post' => $post]);
    }
}

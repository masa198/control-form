<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\ContactRequest;
use App\Models\Contact;


class ContactController extends Controller
{
  public function index()
  {
    return view('index');
  }

//   public function index()
//   {
//     $contact = Contact::Paginate(10);
//     return view('index', compact('contact'));
//   }

  public function confirm(Request $request)
  {
        $contact = $request->only(['name', 'gender', 'email', 'post', 'address', 'build', 'option']);
        return view('confirm', compact('contact'));
  }

   public function store(Request $request)
   {
        $contact = $request->only(['name', 'gender', 'email', 'post', 'address', 'build', 'option']);
        Contact::create($contact);
        return view('thanks');
   }

//     public function destroy(Request $request)
//     {
//         Contact::find($request->id)->delete();
//         return redirect('/contacts');
//     }
}
    // public function store(Request $request)
    // // public function store(ContactRequest $request)
    // {
    //  //入力内容確認ページの送信ボタン0-5
    //     $contact = $request->only(['name', 'email', 'tel', 'content']);
    //           Contact::create($contact);
    //                 return view('thanks');
    // }

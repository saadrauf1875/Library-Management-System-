<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\LibrarianController;

use App\Models\Books;


class LibrarianController extends Controller
{
    //
    public function books(){

        $data=books::all();

        return view('librarian.add_books',compact('data'));
    }

    public function home(){
        return view ('librarian.home');
    }

    //Add Catagory data to database
    public function add_books(Request $request){

        $data =new books;
 
        $data->book_name=$request->book_name;
        $data->book_category=$request->book_category;
        $data->book_author=$request->book_author;
        $data->rack_no=$request->rack_no;
        $data->book_edition=$request->book_edition;
        $data->date_of_publication=$request->date_of_publication;
        $data->book_publisher=$request->book_publisher;
        $data->book_status=$request->book_status;
        

        $data->save();
 
        return redirect()->back()->with('message','Books Catergory Added Successfully!');
 
     }

      // deletee cltagory table data here
    public function delete_books($id){

        $data=books::find($id);

        $data->delete();

        return redirect()->back()->with('message','Category deleted successfully!');

    }

// View Categories
   /*  public function view_categories(){
        $data=products::all();

        return view('admin.view_products',compact('data'));
    }
 */

}

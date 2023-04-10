<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
 
class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }
 
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => 'required',
            'images' => 'required|file|image|mimes:jpeg,png,jpg|max:1',
        ]);
 


        $images = $request->images('images');
        // menyimpan data file yang diupload ke variabel $file
        $images = $request->file('file');
        
        $nama_file = time()."_".$images->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $images->move($tujuan_upload,$nama_file);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('login')->with('success', 'Registration Succesfull! Please Login');
    }
}
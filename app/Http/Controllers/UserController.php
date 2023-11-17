<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\requestUser;

// Generar PDF
use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{
    function store(requestUser $request)
    {
        $data = $request->all();
        User::Create($data);
        return true;
    }

    function index()
    {
        $users = User::all();
        return view('users', compact('users'));
    }

    function update(requestUser $request, $id)
    {
        $user = User::find($id);

        $user->update($request->all());
        return redirect('/');
    }

    function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/');
    }

    // Reportes

    // User List
    function listUsers()
    {
        $users = User::all();
        $pdf = PDF::loadView('reports.list', compact('users'));
        return $pdf->stream('list_users.pdf');
    }

    // Unique User
    function userReport($id)
    {
        $user = User::find($id);
        $pdf = PDF::loadView('reports.unique', compact('user'));
        return $pdf->stream('user_report.pdf');
    }
}

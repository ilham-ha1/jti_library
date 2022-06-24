<?php

namespace App\Http\Controllers;

use App\Models\Borrow_transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trans = Borrow_transaction::paginate(3);
        // $posts = Student::orderBy('id','asc')->paginate(3);
        return view('admin.transaction.index', compact('trans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trans = Borrow_transaction::where('id', $id)->first();

        return view('admin.transaction.detail', ['trans' => $trans]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trans = Borrow_transaction::where('id', $id)->first();
        // $user = User::all();
        return view('admin.transaction.edit', compact('trans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'status' => ['required'],
        ];

        $data = $request->validate($rules);

        Borrow_transaction::where('id', $id)
            ->update($data);

        //if the data successfully updated, will return to main page
        return redirect()->route('transaction.index')
            ->with('success', 'Transaction Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trans = Borrow_transaction::find($id);

        // $trans->borrow_transaction()->detach();

        $trans->delete();
        return redirect()->route('transaction.index')
            ->with('success', 'Transaction Successfully Deleted');
    }
    public function search(Request $request)
    {
        $keyword = $request->search;

        $trans = Borrow_transaction::Where('users_id' , $keyword)
            ->orWhere('amount', $keyword )
            ->orWhere('date_borrow', 'like', "%" . $keyword . "%")
            ->orWhere('date_returndata', 'like', "%" . $keyword . "%")
            ->orWhere('status', 'like', "%" . $keyword . "%")
            ->paginate(3);
        return view('admin.transaction.search', compact('trans'))
            ->with('i', (request()->input('page', 1) - 1) * 3);
    }
}

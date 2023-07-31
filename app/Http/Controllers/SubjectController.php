<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SubjectRequest;
use Illuminate\Support\Facades\Session;

class SubjectController extends Controller
{
    //
    public function list(Request $request)
    {
        $title = 'Danh sách';
        //truy vấn bằng model
        $subject = new Subject();
        $listSubject = $subject::all();
        if ($request->post() && $request->searchSubject) {
            $listSubject = $subject::where('name', 'like', '%' . $request->searchSubject . '%')
                ->get();
        }
        return view('admin.subject.index', compact('title', 'listSubject'));
    }

    //chưa dạy chức năng thêm
    public function add(SubjectRequest $request)
    {
        $title = "Thêm môn học";

        if ($request->isMethod('POST')) {
            //add
            //Xử lý ảnh
            $params = $request->except('_token'); //xóa token để tránh nhầm lẫn khi làm việc vs sql

            $subject = Subject::create($params);

            if ($subject) {
                Session::flash('success', 'Thêm thành công !');
            }
        }
        return view('admin.subject.add', compact('title'));
    }

    public function edit(SubjectRequest $request, $id)
    {
        $title = 'Cập nhật môn học';
        //        cách 1
        $subject = DB::table('subjects')
            ->where('id', $id)->first();

        if ($request->isMethod('POST')) { // check xem có post hay không
            $params = $request->except('_token');
            $result = Subject::where('id', $id)->update($params);
            if ($result) {
                Session::flash('success', 'Sửa thành công');
                //                chuyển trang sau khi thành công
                return redirect()->route('edit-subject', ['id' => $id]);
            }
        }
        return view('admin.subject.edit', compact('title', 'subject'));
    }

    public function delete(Request $request, $id){
        $subjectDlt = Subject::where('id',$id)->delete();
        if($subjectDlt){
            Session::flash('success', 'Xóa thành công');
//                chuyển trang sau khi thành công
            return redirect()->route('list-subject');
        }
    }
}


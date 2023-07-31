<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TeacherRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Teacher as RequestsTeacher;

class TeacherController extends Controller
{
    //

    public function list(Request $request)
    {
        $title = 'Danh sách';
        //truy vấn bằng model
        $teacher = new Teacher();
        $listTeacher = $teacher::all();
        if ($request->post() && $request->searchTeacher) {
            $listTeacher = $teacher::where('name', 'like', '%' . $request->searchTeacher . '%')
                ->get();
        }
        return view('admin.teacher.index', compact('title', 'listTeacher'));
    }

    //chưa dạy chức năng thêm
    public function add(TeacherRequest $request)
    {
        $title = "Thêm giáo viên";

        if ($request->isMethod('POST')) {
            //add
            //Xử lý ảnh
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $request->image = uploadfile('image', $request->file('image'));
            }
            $params = $request->except('_token'); //xóa token để tránh nhầm lẫn khi làm việc vs sql
            $params['image'] = $request->image;

            $teacher = Teacher::create($params);

            if ($teacher) {
                Session::flash('success', 'Thêm thành công !');
            }
        }
        return view('admin.teacher.add', compact('title'));
    }

    public function edit(TeacherRequest $request, $id)
    {
        $title = 'Cập nhật giáo viên';
        //        cách 1
        $teacher = DB::table('teachers')
            ->where('id', $id)->first();

        if ($request->isMethod('POST')) { // check xem có post hay không
            $params = $request->except('_token', 'image');
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                //                Xóa ảnh cũ khi có thực hiện post ảnh mới
                $resultDL = Storage::delete('/public/' . $teacher->image);
                if ($resultDL) {
                    $request->image = uploadFile('image', $request->file('image'));
                    $params['image'] =  $request->image;
                }
            } else {
                //                nếu không thay hình thì ảnh sẽ là ảnh cũ
                $params['image'] = $teacher->image;
            }
            $result = Teacher::where('id', $id)->update($params);
            if ($result) {
                Session::flash('success', 'Sửa khách hàng thành công');
                //                chuyển trang sau khi thành công
                return redirect()->route('edit-teacher', ['id' => $id]);
            }
        }
        return view('admin.teacher.edit', compact('title', 'teacher'));
    }

    public function delete(Request $request, $id){
        $teacherDlt = Teacher::where('id',$id)->delete();
        if($teacherDlt){
            Session::flash('success', 'Xóa khách hàng thành công');
//                chuyển trang sau khi thành công
            return redirect()->route('list-teacher');
        }
    }
}




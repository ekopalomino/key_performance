<?php

namespace Agrinesia\Http\Controllers\App;

use Illuminate\Http\Request;
use Agrinesia\Http\Controllers\Controller;
use Agrinesia\Models\Position;
use Agrinesia\Models\Department;
use Agrinesia\Models\Division;

class ConfigurationController extends Controller
{
    public function positionIndex()
    {
        $data = Position::orderBy('id','ASC')->get();

    	return view('apps.pages.employeePosition',compact('data'));
    }

    public function positionStore(Request $request)
    {
        $this->validate($request, [
            'position_name' => 'required',
        ]);

        $data = Position::create([
            'post_name' => $request->input('position_name'),
        ]);

        $log = 'Position '.($data->post_name).' Created';
         \LogActivity::addToLog($log);
        $notification = array (
            'message' => 'Position '.($data->post_name).' Created',
            'alert-type' => 'success'
        );

        return redirect()->route('position.index')->with($notification);
    }

    public function positionEdit($id)
    {
        $data = Position::find($id);

        return view('apps.edit.employeePosition',compact('data'))->renderSections()['content'];
    }

    public function positionUpdate(Request $request,$id)
    {
        $this->validate($request, [
            'post_name' => 'required',
        ]);
        $orig = Position::find($id);
        $data = $orig->update([
            'post_name' => $request->input('post_name'),
        ]);

        $log = 'Position '.($orig->post_name).' Updated';
         \LogActivity::addToLog($log);
        $notification = array (
            'message' => 'Position '.($orig->post_name).' Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('position.index')->with($notification);
    }

    public function positionDestroy($id)
    {
        $data = Position::find($id);
        $log = 'Position '.($data->post_name).' Deleted';
         \LogActivity::addToLog($log);
        $notification = array (
            'message' => 'Position '.($data->post_name).' Deleted',
            'alert-type' => 'success'
        );
        $data->delete();

        return redirect()->route('position.index')->with($notification);
    }

    public function divisionIndex()
    {
        $data = Division::orderBy('id','ASC')->get();

    	return view('apps.pages.division',compact('data'));
    }

    public function divisionStore(Request $request)
    {
        $this->validate($request, [
            'division_name' => 'required',
        ]);

        $data = Division::create([
            'division_name' => $request->input('division_name'),
        ]);

        $log = 'Division '.($data->division_name).' Created';
         \LogActivity::addToLog($log);
        $notification = array (
            'message' => 'Division '.($data->division_name).' Created',
            'alert-type' => 'success'
        );

        return redirect()->route('division.index')->with($notification);
    }

    public function divisionEdit($id)
    {
        $data = Division::find($id);

        return view('apps.edit.division',compact('data'))->renderSections()['content'];
    }

    public function divisionUpdate(Request $request,$id)
    {
        $this->validate($request, [
            'division_name' => 'required',
        ]);
        $orig = Division::find($id);
        $data = $orig->update([
            'division_name' => $request->input('division_name'),
        ]);

        $log = 'Division '.($orig->division_name).' Updated';
         \LogActivity::addToLog($log);
        $notification = array (
            'message' => 'Division '.($orig->position_name).' Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('division.index')->with($notification);
    }
}

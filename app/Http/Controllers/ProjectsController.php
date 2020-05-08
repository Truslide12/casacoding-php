<?php

namespace App\Http\Controllers;

use App\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projects::orderBy('ranking')->paginate(10);
        return view('projects.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = new Projects();
        return view('projects.create')->with('project', $project);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate
        ([
            'projectName'   =>  'required|unique:Projects|string|max:255',
            'projectType'   =>  'required|string|max:255',
             'url'          =>  'required|unique:Projects|string|max:255',
            'github'        =>  'required|string|max:255',
            'img'           =>  'required|string|max:255',
            'video'         =>  'string|max:255',
            'description'   =>  'string|max:255',
            'keywords'      =>  'required|string|max:255',
            'ranking'       =>  'integer',
          ]);
        //   dump($request->toArray());
        $project = Projects::create([
            'projectName'   =>  $request->projectName,
            'projectType'   =>  $request->projectType,
            'url'           =>  $request->url,
            'github'        =>  $request->github,
            'img'           =>  $request->img,
            'video'         =>  $request->video,
            'description'   =>  $request->description,
            'keywords'      =>  $request->keywords,
            'ranking'       =>  $request->ranking,
        ]);
        // dump($Project);
        // dump($Project->id);
        // $Project->addresses()->attatch($request->all()); // to be added later once I figure out how to make this function correctly
        return view('projects.details')->with('project', $project);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(Projects $projects)
    {
        return view('projects.details')
        ->with('projects', $projects);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Project = Project::find($id);
        if($Project) {            
            return view('Projects.edit')->with('Project',$Project);   
        } else {
            return redirect('Projects');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'projectName'   =>  'required|string|max:255',
            'projectType'   =>  'required|string|max:255',
            'url'           =>  'required|string|max:255',
            'github'        =>  'nullable|string|max:255',
            'image'         =>  'nullable|string|max:255',
            'video'         =>  'required|string|max:255',
            'keywords'      =>  'nullable|string|max:255',
            'ranking'       =>  'nullable|string|max:255',
          ]);
        Project::find($id)->update($request->all());
        return redirect()->route('Projects.index')->with('success','Project update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::find($id)->delete();
        return redirect()->route('Projects.index')->with('success','Project deleted success');   
    
    }

        /**
     * Show specific types of projects the specified resource from storage.
     *
     * @param  \App\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function search($query)
    {
        // Project::find($id)->delete();
        // return redirect()->route('Projects.index')->with('success','Project deleted success');   
    
    }

            /**
     * Show webdevelopment projects from storage.
     *
     * @param  \App\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function webdev()
    {
        $projects = Projects::where('projectType','like',"webdev")->get();
        // dump($projects);
        return view('projects.webdev', ['projects' => $projects]);
    }

            /**
     * Show webdevelopment projects from storage.
     *
     * @param  \App\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function php()
    {
        $projects = Projects::where('keywords','like',"%php%")->get();
        // dump($projects);
        return view('projects.php', ['projects' => $projects]);
    }

            /**
     * Show webdevelopment projects from storage.
     *
     * @param  \App\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function react()
    {
        $projects = Projects::where('keywords','like','%react%')->get();
        return view('projects.react', ['projects' => $projects]);
    }

    public function nodejs()
    {
        $projects = Projects::where('keywords','like','%nodejs%')->get();
        return view('projects.nodejs', ['projects' => $projects]);
    }
}

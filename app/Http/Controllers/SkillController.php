<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use App\Models\Skill;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::all();
        return Inertia::render('Skills/index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Skills/Create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image',
        ]);

        if($request->hasFile('image')){
           $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images/Skills'), $imageName);
            $imagePath = 'images/Skills/' . $imageName;
        }

        Skill::create([
            'name' => $request->name,
            'image' => $imagePath
        ]);

        return redirect()->route('skills.index')->with('success', 'New Skill Added Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        return Inertia::render('Skills/Edit', [
            'skill' => $skill,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        // dd($request);
        $validated = $request->validate([
        'name' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($skill->image) {
                Storage::disk('public')->delete('Skills/' . $skill->image);
            }
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images/Skills'), $imageName);
            $imagePath = 'images/Skills/' . $imageName;
            $validated['image'] = $imagePath;
        }else{
            unset($validated['image']);
        }

        $skill->update($validated);

        return redirect()->route('skills.index')->with('success', 'Skill updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        // Delete image
        if ($skill->image) {
            Storage::disk('public')->delete('Skills/' . $skill->image);
        }

        $skill->delete();

        return redirect()->route('skills.index')->with('success', 'Skill deleted!');
    }
}

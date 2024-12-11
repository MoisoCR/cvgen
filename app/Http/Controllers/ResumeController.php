<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ResumeController extends Controller
{

    public function index()
    {
        // Obtener todos los currículums
        $resumes = Resume::all();
        // Retornar la vista index con los currículums
        return view('resumes.index', compact('resumes'));
    }
    
    public function create()
    {
        return view('resumes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'education' => 'required|string|max:500',
            'experience' => 'required|string|max:500',
            'skills' => 'required|string|max:500',
        ]);
    
        // Crear el currículum
        Resume::create($request->all());
    
        return redirect()->route('resumes.index')->with('success', 'Currículum creado con éxito.');
    }
    

    public function export($id)
    {
        // Obtener el currículum
        $resume = Resume::findOrFail($id);

        // Generar el PDF
        $pdf = Pdf::loadView('resumes.pdf', compact('resume'));

        // Retornar el PDF descargable
        return $pdf->download('curriculum_' . $resume->id . '.pdf');
    }

    public function edit($id)
    {
        $resume = Resume::findOrFail($id);
        return view('resumes.edit', compact('resume'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'education' => 'required|string|max:500',
            'experience' => 'required|string|max:500',
            'skills' => 'required|string|max:500',
        ]);

        $resume = Resume::findOrFail($id);
        $resume->update($request->all());

        return redirect()->route('resumes.index')->with('success', 'Currículum actualizado con éxito.');
    }

    public function destroy($id)
    {
        $resume = Resume::findOrFail($id);
        $resume->delete();

        return redirect()->route('resumes.index')->with('success', 'Currículum eliminado con éxito.');
    }

    public function exportToPdf($id)
    {
        $resume = Resume::findOrFail($id);

        // Generar el PDF con la vista solo para el currículum
        $pdf = PDF::loadView('resumes.pdf', compact('resume'));

        // Descargar el PDF
        return $pdf->download('curriculum_'.$resume->name.'.pdf');
    }

}


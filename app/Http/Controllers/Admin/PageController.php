<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Http\Controllers\Controller; // <-- Agrega esta línea

class PageController extends Controller
{
    public function edit($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view("admin.$slug", compact('page'));
    }

    public function update(Request $request, $slug)
{
    switch ($slug) {
        case 'about':
            $request->validate([
                'value_1' => ['required', 'string', 'not_regex:/<[^>]*>/'],
                'value_2' => ['required', 'string', 'not_regex:/<[^>]*>/'],
                'value_3' => ['required', 'string', 'not_regex:/<[^>]*>/'],
                'value_4' => ['required', 'string', 'not_regex:/<[^>]*>/'],
                'content' => ['required', 'string', 'not_regex:/<[^>]*>/'],
                'video_url' => ['nullable', 'string'],
            ]);
            break;
        case 'index':
            $request->validate([
                'content' => ['required', 'string', 'not_regex:/<[^>]*>/'],
                'cta_content' => ['required', 'string', 'not_regex:/<[^>]*>/'],
            ]);
            break;
            case 'products':
    $request->validate([
        'product1_title' => ['nullable', 'string', 'not_regex:/<[^>]*>/'],
        'product1_price' => ['nullable', 'string', 'not_regex:/<[^>]*>/'],
        'product1_content' => ['nullable', 'string', 'not_regex:/<[^>]*>/'],
        'product2_title' => ['nullable', 'string', 'not_regex:/<[^>]*>/'],
        'product2_price' => ['nullable', 'string', 'not_regex:/<[^>]*>/'],
        'product2_content' => ['nullable', 'string', 'not_regex:/<[^>]*>/'],
    ]);
    break;
    case 'store':
    $request->validate([
        'sunday_hours' => ['nullable', 'string'],
        'monday_hours' => ['nullable', 'string'],
        'tuesday_hours' => ['nullable', 'string'],
        'wednesday_hours' => ['nullable', 'string'],
        'thursday_hours' => ['nullable', 'string'],
        'friday_hours' => ['nullable', 'string'],
        'saturday_hours' => ['nullable', 'string'],
        'phone_content' => ['nullable', 'string'],
    ]);
    break;
        default:
            $request->validate([
                'content' => ['required', 'string', 'not_regex:/<[^>]*>/'],
            ]);
            break;
    }

    $page = Page::where('slug', $slug)->firstOrFail();

    // Actualiza los campos según la página
    switch ($slug) {
        case 'about':
            $page->content = $request->input('content');
            $page->value_1 = $request->input('value_1');
            $page->value_2 = $request->input('value_2');
            $page->value_3 = $request->input('value_3');
            $page->value_4 = $request->input('value_4');
            // GUARDAR VIDEO SUBIDO
            if ($request->hasFile('video_file')) {
                $videoPath = $request->file('video_file')->store('videos', 'public');
                $page->video_url = $videoPath;
            }
            break;
        case 'index':
            $page->content = $request->input('content');
            $page->cta_content = $request->input('cta_content');
            break;
        case 'products':
            $page->product1_title = $request->input('product1_title');
            $page->product1_price = $request->input('product1_price');
            $page->product1_content = $request->input('product1_content');
            $page->product2_title = $request->input('product2_title');
            $page->product2_price = $request->input('product2_price');
            $page->product2_content = $request->input('product2_content');

            if ($request->hasFile('product1_image')) {
                $img1 = $request->file('product1_image')->store('products', 'public');
                $page->product1_image = $img1;
            }
            if ($request->hasFile('product2_image')) {
                $img2 = $request->file('product2_image')->store('products', 'public');
                $page->product2_image = $img2;
            }
            break;
        case 'store':
            $page->sunday_hours = $request->input('sunday_hours');
            $page->monday_hours = $request->input('monday_hours');
            $page->tuesday_hours = $request->input('tuesday_hours');
            $page->wednesday_hours = $request->input('wednesday_hours');
            $page->thursday_hours = $request->input('thursday_hours');
            $page->friday_hours = $request->input('friday_hours');
            $page->saturday_hours = $request->input('saturday_hours');
            $page->phone_content = $request->input('phone_content');
            break;
    }

    $page->save();

    return redirect()->back()->with('success', 'Contenido actualizado correctamente.');
}}
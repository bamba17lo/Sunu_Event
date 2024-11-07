<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'eventName'=> ['required'],
            'eventDate'=> ['required'],
            'startTime' => ['required'],
            'endTime' => ['required'],
            'capacity' => ['required'],
            'lieu' => ['required'],
            'media1'=> ['required','image','mimes:jpg,jpeg,png'],
            'media2'=>['mimetypes:video/mp4,video/avi,video/mpeg,'],
            'category_event_id'=> ['required','exists:category_events,id'],
            'region_id'=> ['required','exists:regions,id'],
            'description'=> ['required']

        ];
    }

    public function messages()
    {
        return [
            'eventName.required' =>'Ce champs est obligatoire',
            'eventDate.required' =>'Ce champs est obligatoire',
            'startTime.required' =>'Ce champs est obligatoire',
            'endTime.required' =>'Ce champs est obligatoire',
            'capacity.required' =>'Ce champs est obligatoire',
            'lieu.required' =>'Ce champs est obligatoire',
            'media1.required' =>'Ce champs est obligatoire',
            'media1.mimes' =>'Type de fichier non reconnu',
            'media2.video' =>'Type de fichier non reconnu',
            'category_event_id.required' =>'Ce champs est obligatoire',
            'region_id.required' =>'Ce champs est obligatoire',
            'category_event_id.exists' =>'Ce categorie n\'existe pas',
            'region_id.exists' =>'Cette région n\'existe pas',
            'description.required' =>'Ce champs est obligatoire',

        ];
    }
}

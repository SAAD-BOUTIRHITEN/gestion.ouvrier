@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-large text-red-600">
            {{ __("Whoops! vous n'êtes pas un travailleur.") }}
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

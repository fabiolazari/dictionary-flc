@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-yellow-700 bg-yellow-100 border border-yellow-300">{{ $error }}</li>
        @endforeach
    </ul>
@endif

@csrf
<input type="text" name="description" id="description" placeholder="Descrição" value="{{ $word->description ?? old('description') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<textarea name="meaning" id="meaning" rows="5" cols="33" placeholder="Significado" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">{{ $word->meaning ?? old('meaning') }}</textarea>
<textarea name="note" id="note" rows="5" cols="33" placeholder="Observações" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">{{ $word->note ?? old('note') }}</textarea>
<input type="text" name="sentence_id" id="sentence_id" placeholder="Sentença" value="{{ $word->sentence_id ?? old('sentence_id') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="language_id" id="language_id" placeholder="Língua" value="{{ $word->language_id ??  old('language_id') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<button type="submit">Enviar</button>

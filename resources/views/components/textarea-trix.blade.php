 <x-input-label for="content" value="Content" />
                            <input id="content" type="hidden" name="content" value="{{ old('content', $post->content) }}">
                            <trix-editor input="content" class="border-gray-300 rounded-md shadow-sm"></trix-editor>
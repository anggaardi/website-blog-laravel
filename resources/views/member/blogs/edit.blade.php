<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Blog
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-2xl">
                    <form method="post" action="{{ route('member.blogs.edit', $post->id) }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        @method('put')

                        <div>
                            <x-input-label for="title" value="Title" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" value="{{ old('title', $post->title) }}" />
                        </div>

                        <div>
                            <x-input-label for="deskripsi" value="Deskripsi" />
                            <x-text-input id="deskripsi" name="deskripsi" type="text" class="mt-1 block w-full" value="{{ old('deskripsi', $post->deskripsi) }}" />
                        </div>

                        <div>
                            <x-input-label for="thumbnail" value="Thumbnail" />
                            <input type="file" id="thumbnail" name="thumbnail" class="mt-1 block w-full border-gray-300 rounded-md">
                        </div>

                        <div>
                            <x-input-label for="content" value="Content" />
                            <input id="content" type="hidden" name="content" value="{{ old('content', $post->content) }}">
                            <trix-editor input="content" class="border-gray-300 rounded-md shadow-sm"></trix-editor>
                        </div>

                        <div>
                            <x-input-label for="status" value="Status" />
                            <select id="status" name="status" class="border-gray-300 rounded-md shadow-sm">
                                <option value="draft" {{ old('status', $post->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                                <option value="publish" {{ old('status', $post->status) == 'publish' ? 'selected' : '' }}>Publish</option>
                            </select>
                        </div>

                        <div class="flex items-center gap-4">
                            <x-secondary-button href="{{ route('member.blogs.index') }}">Kembali</x-secondary-button>
                            <x-primary-button>Simpan</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

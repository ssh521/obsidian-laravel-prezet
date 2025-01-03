@php
    /* @var array $nav */
    /* @var array|null|string $currentTag */
    /* @var array|null|string $currentCategory */
    /* @var \Illuminate\Support\Collection<int,\BenBjurstrom\Prezet\Data\FrontmatterData> $articles */
@endphp

<x-prezet::template>
    @seo([
        'title' => 'Obsidian 블로그 만들기',
        'description' =>
            '마크다운 파일을 SEO 친화적인 블로그, 아티클, 문서로 변환하세요!',
        'url' => route('prezet.index'),
        'image' => asset('/prezet/img/ogimages/obsidian.webp'),
    ])
    <x-slot name="left">
        <x-prezet::sidebar :nav="$nav" />
    </x-slot>
    <section>
        <div class="divide-y divide-gray-200">
            <div class="space-y-2 pb-8 md:space-y-5">
                <h1
                    class="font-display text-4xl font-bold tracking-tight text-gray-900"
                >
                    Obsidian Blog
                </h1>

                <div class="justify-between sm:flex">
                    <p class="text-lg leading-7 text-gray-500">
                        Obsidian로 마크다운 문서를 작성하고, Laravel Framework 를 이용해서 웹사이트로 공개하고 있습니다.<br>
                        본 사이트는 KT 고정IP 로 세팅된 Synology NAS 에서 서비스 되고 있습니다.
                    </p>
                    <div class="mt-4 block sm:mt-0">
                        @if ($currentTag)
                            <span
                                class="inline-flex items-center gap-x-0.5 rounded-md bg-gray-50 px-2.5 py-1.5 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10"
                            >
                                {{ \Illuminate\Support\Str::title($currentTag) }}
                                <a
                                    href="{{ route('prezet.index', array_filter(request()->except('tag'))) }}"
                                    class="group relative -mr-1 h-3.5 w-3.5 rounded-sm hover:bg-gray-500/20"
                                >
                                    <span class="sr-only">Remove</span>
                                    <svg
                                        viewBox="0 0 14 14"
                                        class="h-3.5 w-3.5 stroke-gray-600/50 group-hover:stroke-gray-600/75"
                                    >
                                        <path d="M4 4l6 6m0-6l-6 6" />
                                    </svg>
                                    <span class="absolute -inset-1"></span>
                                </a>
                            </span>
                        @endif

                        @if ($currentCategory)
                            <span
                                class="inline-flex items-center gap-x-0.5 rounded-md bg-gray-50 px-2.5 py-1.5 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10"
                            >
                                {{ $currentCategory }}
                                <a
                                    href="{{ route('prezet.index', array_filter(request()->except('category'))) }}"
                                    class="group relative -mr-1 h-3.5 w-3.5 rounded-sm hover:bg-gray-500/20"
                                >
                                    <span class="sr-only">Remove</span>
                                    <svg
                                        viewBox="0 0 14 14"
                                        class="h-3.5 w-3.5 stroke-gray-600/50 group-hover:stroke-gray-600/75"
                                    >
                                        <path d="M4 4l6 6m0-6l-6 6" />
                                    </svg>
                                    <span class="absolute -inset-1"></span>
                                </a>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <ul class="divide-y divide-gray-200">
                @foreach ($articles as $article)
                    <li class="py-12">
                        <x-prezet::article :article="$article" />
                    </li>
                @endforeach
            </ul>
            <div class="pt-12">
                {{ $paginator->links() }}
            </div>
        </div>
    </section>

    <x-prezet::footer />
</x-prezet::template>

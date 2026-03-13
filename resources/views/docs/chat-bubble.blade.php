<x-layouts.app title="Chat Bubble - Flowbite Blade" description="Use the chat bubble component to show messages in a chat-like interface.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Chat Bubble - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the chat bubble component to show messages in a chat-like interface.</p>

    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <x-fwb.chat-bubble name="Bonnie Green" time="11:46" avatar="https://flowbite.com/docs/images/people/profile-picture-3.jpg" message="That's awesome. I think our users will really appreciate the improvements." />
    <x-fwb.chat-bubble name="You" time="11:47" position="right" message="Thanks! I'm glad you think so." />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Chat Bubble" />
</x-layouts.app>

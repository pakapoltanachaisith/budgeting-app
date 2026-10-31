<x-layout.app title="welcome">
  <h1 class="text-3xl">Hello</h1>
  <form action="{{ route('logout') }}" method="post">
    @csrf
    <button class="btn btn-error">logout</button>
  </form>
</x-layout.app>

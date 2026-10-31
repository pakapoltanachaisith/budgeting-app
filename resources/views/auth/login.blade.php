<x-layout.auth title="Log in">
  <div class="mb-6">
    <h1 class="text-3xl text-center font-medium mb-2">Log In</h1>
    <p class="text-sm text-center text-slate-400">Please log in to your Simple Budget account to continue.</p>
  </div>

  @error('loginFailed')
    <x-danger-alert class="mb-6">{{ $message }}</x-danger-alert>
  @enderror

  <form action="/login" method="POST">
    @csrf
    <div class="space-y-3">
      <div class="fieldset">
        <label for="email" class="fieldset-legend">Email Address</label>
        <div class="input w-full">
          <svg
            class="size-4"
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-at"
          >
            <path
              stroke="none"
              d="M0 0h24v24H0z"
              fill="none"
            />
            <path d="M8 12a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
            <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28" />
          </svg>
          <input
            type="email"
            name="email"
            id="email"
            class="w-full"
            autofocus
            required
          >
        </div>
        @error('email')
          <span class="fieldset-label text-error">{{ $message }}</span>
        @enderror
      </div>
      <div class="fieldset">
        <label for="password">Password</label>
        <x-password-input
          id="password"
          name="password"
          required
        />
        @error('password')
          <span class="fieldset-label text-error">{{ $message }}</span>
        @enderror
      </div>
    </div>
    <div class="mt-5">
      <button type="submit" class="btn btn-primary btn-block">
        Continue
        <svg
          class="size-4"
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="currentColor"
          class="icon icon-tabler icons-tabler-filled icon-tabler-chevron-right"
        >
          <path
            stroke="none"
            d="M0 0h24v24H0z"
            fill="none"
          />
          <path
            d="M9.707 5.293l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 1 1 -1.414 -1.414l5.293 -5.293l-5.293 -5.293a1 1 0 0 1 1.414 -1.414"
          />
        </svg>
      </button>
    </div>
  </form>
  <div class="mt-6 text-center">
    <p class="text-xs text-gray-500">Don't have an account? <a href="/register"
        class="text-pretty link link-primary">Register</a></p>
  </div>
</x-layout.auth>

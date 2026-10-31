<div {{ $attributes->merge([
    'role' => 'alert',
    'class' => 'alert alert-error',
]) }} x-data>
  <svg
    xmlns="http://www.w3.org/2000/svg"
    class="h-6 w-6 shrink-0 stroke-current"
    fill="none"
    viewBox="0 0 24 24"
  >
    <path
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="2"
      d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"
    />
  </svg>
  <span>{{ $slot }}</span>
  <button
    type="button"
    class="ml-auto btn btn-sm btn-square btn-error"
    @click="$root.remove()"
  >
    <span class="sr-only">dismiss</span>
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
      class="icon icon-tabler icons-tabler-outline icon-tabler-x"
    >
      <path
        stroke="none"
        d="M0 0h24v24H0z"
        fill="none"
      />
      <path d="M18 6l-12 12" />
      <path d="M6 6l12 12" />
    </svg>
  </button>
</div>

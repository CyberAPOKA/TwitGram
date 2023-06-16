<template>
  <div
    class="rounded-box grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5"
  >
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="light"
      data-act-class="!outline-base-content"
      @click="mode = 'light'"
    >
      <div
        data-theme="light"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">light</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="dark"
      data-act-class="!outline-base-content"
      @click="mode = 'dark'"
    >
      <div
        data-theme="dark"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">dark</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="cupcake"
      data-act-class="!outline-base-content"
      @click="mode = 'cupcake'"
    >
      <div
        data-theme="cupcake"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">cupcake</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="bumblebee"
      data-act-class="!outline-base-content"
      @click="mode = 'bumblebee'"
    >
      <div
        data-theme="bumblebee"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">bumblebee</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="emerald"
      data-act-class="!outline-base-content"
      @click="mode = 'emerald'"
    >
      <div
        data-theme="emerald"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">emerald</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="corporate"
      data-act-class="!outline-base-content"
      @click="mode = 'corporate'"
    >
      <div
        data-theme="corporate"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">corporate</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="synthwave"
      data-act-class="!outline-base-content"
      @click="mode = 'synthwave'"
    >
      <div
        data-theme="synthwave"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">synthwave</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="retro"
      data-act-class="!outline-base-content"
      @click="mode = 'retro'"
    >
      <div
        data-theme="retro"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">retro</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="cyberpunk"
      data-act-class="!outline-base-content"
      @click="mode = 'cyberpunk'"
    >
      <div
        data-theme="cyberpunk"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">cyberpunk</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="valentine"
      data-act-class="!outline-base-content"
      @click="mode = 'valentine'"
    >
      <div
        data-theme="valentine"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">valentine</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="halloween"
      data-act-class="!outline-base-content"
      @click="mode = 'halloween'"
    >
      <div
        data-theme="halloween"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">halloween</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="garden"
      data-act-class="!outline-base-content"
      @click="mode = 'garden'"
    >
      <div
        data-theme="garden"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">garden</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="forest"
      data-act-class="!outline-base-content"
      @click="mode = 'forest'"
    >
      <div
        data-theme="forest"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">forest</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="aqua"
      data-act-class="!outline-base-content"
      @click="mode = 'aqua'"
    >
      <div
        data-theme="aqua"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">aqua</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="lofi"
      data-act-class="!outline-base-content"
      @click="mode = 'lofi'"
    >
      <div
        data-theme="lofi"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">lofi</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="pastel"
      data-act-class="!outline-base-content"
      @click="mode = 'pastel'"
    >
      <div
        data-theme="pastel"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">pastel</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="fantasy"
      data-act-class="!outline-base-content"
      @click="mode = 'fantasy'"
    >
      <div
        data-theme="fantasy"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">fantasy</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="wireframe"
      data-act-class="!outline-base-content"
      @click="mode = 'wireframe'"
    >
      <div
        data-theme="wireframe"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">wireframe</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="black"
      data-act-class="!outline-base-content"
      @click="mode = 'black'"
    >
      <div
        data-theme="black"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">black</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="luxury"
      data-act-class="!outline-base-content"
      @click="mode = 'luxury'"
    >
      <div
        data-theme="luxury"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">luxury</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="dracula"
      data-act-class="!outline-base-content"
      @click="mode = 'dracula'"
    >
      <div
        data-theme="dracula"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">dracula</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="cmyk"
      data-act-class="!outline-base-content"
      @click="mode = 'cmyk'"
    >
      <div
        data-theme="cmyk"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">cmyk</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="autumn"
      data-act-class="!outline-base-content"
      @click="mode = 'autumn'"
    >
      <div
        data-theme="autumn"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">autumn</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="business"
      data-act-class="!outline-base-content"
      @click="mode = 'business'"
    >
      <div
        data-theme="business"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">business</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="acid"
      data-act-class="!outline-base-content"
      @click="mode = 'acid'"
    >
      <div
        data-theme="acid"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">acid</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="lemonade"
      data-act-class="!outline-base-content"
      @click="mode = 'lemonade'"
    >
      <div
        data-theme="lemonade"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">lemonade</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="night"
      data-act-class="!outline-base-content"
      @click="mode = 'night'"
    >
      <div
        data-theme="night"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">night</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="coffee"
      data-act-class="!outline-base-content"
      @click="mode = 'coffee'"
    >
      <div
        data-theme="coffee"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">coffee</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-lg border outline outline-2 outline-offset-2 outline-transparent"
      data-set-theme="winter"
      data-act-class="!outline-base-content"
      @click="mode = 'winter'"
    >
      <div
        data-theme="winter"
        class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
      >
        <div class="grid grid-cols-5 grid-rows-3">
          <div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div>
          <div class="bg-base-300 col-start-1 row-start-3"></div>
          <div
            class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2"
          >
            <div class="font-bold">winter</div>
            <div class="flex flex-wrap gap-1">
              <div
                class="bg-primary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-primary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-secondary flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-secondary-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-accent flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-accent-content text-sm font-bold">A</div>
              </div>
              <div
                class="bg-neutral flex aspect-square w-5 items-center justify-center rounded lg:w-6"
              >
                <div class="text-neutral-content text-sm font-bold">A</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script setup>
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";
import { useColorMode } from "@vueuse/core";
import Colors from "@/Pages/Test/Components/Colors.vue";
onMounted(() => {
  initFlowbite();
});

const mode = useColorMode({
  attribute: "data-theme",
  modes: {
    light: "light",
    dark: "dark",
    cupcake: "cupcake",
    bumblebee: "bumblebee",
    emerald: "emerald",
    corporate: "corporate",
    synthwave: "synthwave",
    retro: "retro",
    cyberpunk: "cyberpunk",
    valentine: "valentine",
    halloween: "halloween",
    garden: "garden",
    forest: "forest",
    aqua: "aqua",
    lofi: "lofi",
    pastel: "pastel",
    fantasy: "fantasy",
    wireframe: "wireframe",
    black: "black",
    luxury: "luxury",
    dracula: "dracula",
    cmyk: "cmyk",
    autumn: "autumn",
    business: "business",
    acid: "acid",
    lemonade: "lemonade",
    night: "night",
    coffee: "coffee",
    winter: "winter",
  },
});
</script>

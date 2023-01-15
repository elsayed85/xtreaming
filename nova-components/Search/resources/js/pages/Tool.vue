<template>
  <div>
    <Head title="Search" />

    <Heading class="mb-6">Search</Heading>

    <Card
      class="flex flex-col items-center justify-center"
      style="min-height: 300px"
    >
      <div style="width: 90%">
        <div class="flex flex-col p-2 py-6 m-h-screen">
          <div
            class="
              bg-white
              items-center
              justify-between
              w-full
              flex
              rounded-full
              shadow-lg
              p-2
              mb-5
              sticky
            "
            style="top: 5px"
          >
            <div>
              <div
                class="p-2 mr-1 rounded-full hover:bg-gray-100 cursor-pointer"
              >
                <svg
                  class="h-6 w-6 text-gray-500"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    fill-rule="evenodd"
                    d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </div>
            </div>
            <input
              class="
                font-bold
                uppercase
                rounded-full
                w-full
                py-4
                pl-4
                text-gray-700
                bg-gray-100
                leading-tight
                focus:outline-none focus:shadow-outline
                lg:text-sm
                text-xs
              "
              type="text"
              placeholder="Search"
              v-model="query"
            />

            <div
              @click="submit"
              class="
                bg-gray-600
                p-2
                hover:bg-blue-400
                cursor-pointer
                mx-2
                rounded-full
              "
            >
              <svg
                class="w-6 h-6 text-white"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </div>
          </div>

          <div v-if="noResults == true">
            Sorry, but no results were found. I blame Apple.
          </div>

          <div v-if="searching">
            <i>Searching...</i>
          </div>

          <div
            class="flex flex-col gap-4 lg:p-4 p-2 rounde-lg m-2"
            v-if="noResults == false"
          >
            <div class="w-full">
              <div class="border-b border-gray-200 shadow">
                <table class="divide-y divide-gray-300">
                  <thead class="bg-gray-50">
                    <tr>
                      <th class="px-6 py-2 text-xs text-gray-500">Poster</th>
                      <th class="px-6 py-2 text-xs text-gray-500">Name</th>
                      <th class="px-6 py-2 text-xs text-gray-500">Original Title</th>
                      <th class="px-6 py-2 text-xs text-gray-500">
                        Release Date
                      </th>
                      <th class="px-6 py-2 text-xs text-gray-500">Import</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-300">
                    <tr
                      class="whitespace-nowrap"
                      v-for="(item) in results"
                      :key="item.id"
                    >
                      <td class="px-6 py-4 text-sm text-gray-500">
                        <img
                          :src="'https://image.tmdb.org/t/p/w500' + item.poster_path"
                          style="height: 100px; width: 100px; object-fit: cover;"
                          alt="poster"
                        />
                      </td>
                      <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            {{ item.title }}
                        </div>
                      </td>
                      <td class="px-6 py-4">
                        <div class="text-sm text-gray-500">
                          {{ item.original_title }}
                        </div>
                      </td>
                      <td class="px-6 py-4 text-sm text-gray-500">
                        {{ item.release_date }}
                      </td>
                      <td class="px-6 py-4">
                        <a
                          :href="'resources/movies/new?tmdb_id=' + item.id"
                          class="
                            px-4
                            py-1
                            text-sm text-blue-600
                            bg-blue-200
                            rounded-full
                          "
                          >
                          Import
                          </a
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </Card>
  </div>
</template>

<script>
export default {
  mounted() {},
  data() {
    return {
      query: "",
      results: [],
      noResults: true,
      searching: false,
    };
  },
  methods: {
    submit() {
      this.searching = true;
      Nova.request()
        .post("/nova-vendor/search", {
          query: this.query,
        })
        .then((response) => {
          this.searching = false;
          console.log(response.data);
          this.results = response.data.results;
          if (this.results.length == 0) {
            this.noResults = true;
          } else {
            this.noResults = false;
          }
        });
    },
  },
};
</script>

<style>
/* Scoped Styles */
</style>

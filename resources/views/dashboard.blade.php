<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chasoul UIX Portfolio</title>
  @vite('resources/css/app.css')
  <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<body>
    {{-- navbar --}}
    <div class="shadow-lg navbar bg-base-100">
        <div class="container flex items-center justify-between mx-auto">
            <a class="text-2xl font-bold btn btn-ghost">Chasoul UIX</a>
            <div>
                <ul class="menu menu-horizontal">
                    <li><a href="https://instagram.com/chasoul.uix" class="hover:text-primary">Instagram</a></li>
                    <li>
                        <details class="group">
                            <summary class="cursor-pointer">About Me</summary>
                            <ul class="hidden p-2 rounded-lg shadow-md bg-base-100 group-open:block">
                                <li><a href="#Project" class="hover:text-primary">Project</a></li>
                                <li><a href="#AboutMe" class="hover:text-primary">About Me</a></li>
                            </ul>
                        </details>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- header --}}
    <div class="min-h-screen hero bg-base-200" id="Contact">
        <div class="container flex-col mx-auto hero-content lg:flex-row-reverse">
            <img src="img/me.jpg" alt="Profile" class="max-w-sm transition-transform duration-300 rounded-lg shadow-2xl hover:scale-105" style="width: 20%; margin-left:50px; border-radius:20%;"/>
            <div>
                <h1 class="text-5xl font-bold">Chasoul Website Portofolio</h1>
                <p class="py-6">UI-UX Designer | Front-End Developer | Content Creator Agency Media
                <br>
                TS International Agency 2021 | UI-UX Designer 2024
                </p>
                <button class="transition-colors duration-300 btn btn-primary hover:bg-primary-focus"><a href="https://saweria.co/chasoul" target="_self">Support Me</a></button>
                <div class="dropdown dropdown-right">
                    <div tabindex="0" role="button" class="m-1 btn" style="background-color: rgb(0, 0, 0)">Contact Us</div>
                    <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                      <li><a>Whatsapp : +62 85172360309</a></li>
                      <li><a>Email : chasoul.contact@gmail.com</a></li>
                      <li><a>Github : Chasoul-VSCode</a></li>
                    </ul>
                  </div>
            </div>
        </div>
        <span class="loading loading-infinity loading-lg" style="margin-left: 250px;"></span>
    </div>
    <br>

    {{-- statistic --}}
    <div class="flex justify-center"  id="Project">
        <div class="shadow stats">
          <div class="stat">
            <div class="stat-figure text-primary">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                class="inline-block w-8 h-8 stroke-current">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
              </svg>
            </div>
            <div class="stat-title">Total Likes</div>
            <div class="stat-value text-primary">190</div>
            <div class="stat-desc">21% more than last month</div>
          </div>

          <div class="stat">
            <div class="stat-figure text-secondary">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                class="inline-block w-8 h-8 stroke-current">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M13 10V3L4 14h7v7l9-11h-7z"></path>
              </svg>
            </div>
            <div class="stat-title">Page Views</div>
            <div class="stat-value text-secondary">291</div>
            <div class="stat-desc">21% more than last month</div>
          </div>

          <div class="stat">
            <div class="stat-figure text-secondary">
              <div class="avatar online">
              </div>
            </div>
            <div class="stat-value">86%</div>
            <div class="stat-title">Tasks done</div>
            <div class="stat-desc text-secondary">31 tasks remaining</div>
          </div>
        </div>
      </div>
      <br>

    {{-- table skill --}}
    <div class="overflow-x-auto" style="padding: 50px;">
        <table class="table">
            <p style="text-align: center">My Project On Github ( Chasoul-VSCode )</p>
            <br>
          <!-- head -->
          <thead>
            <tr>
              <th>
                <label>
                  <input type="checkbox" class="checkbox" />
                </label>
              </th>
              <th>Project Name</th>
              <th>Leanguage</th>
              <th>Github Repository</th>
              <th></th>
            </tr>
          </thead>
          <tbody>

            <!-- row 1 -->
            <tr>
              <th>
                <label>
                  <input type="checkbox" class="checkbox" />
                </label>
              </th>
              <td>
                <div class="flex items-center gap-3">
                    <div class="font-bold">Recruitment Agency</div>
                    <div class="text-sm opacity-50"></div>
                  </div>
                </div>
              </td>
              <td>
                PHP ( Laravel )
                <br />
                <span class="badge badge-ghost badge-sm">Website App</span>
              </td>
              <td>Ready</td>
              <th>
                <button class="btn btn-ghost btn-xs">Github</button>
              </th>
            </tr>

            <!-- row 2 -->
            <tr>
              <th>
                <label>
                  <input type="checkbox" class="checkbox" />
                </label>
              </th>
              <td>
                <div class="flex items-center gap-3">
                  <div>
                    <div class="font-bold">API Recruitment Agency </div>
                  </div>
                </div>
              </td>
              <td>
                Python
                <br />
                <span class="badge badge-ghost badge-sm">Service API</span>
              </td>
              <td>Ready</td>
              <th>
                <button class="btn btn-ghost btn-xs">Github</button>
              </th>
            </tr>

             <!-- row 3 -->
            <tr>
              <th>
                <label>
                  <input type="checkbox" class="checkbox" />
                </label>
              </th>
              <td>
                <div class="flex items-center gap-3">
                  <div>
                    <div class="font-bold"> UI Absensi & Admin </div>
                  </div>
                </div>
              </td>
              <td>
                HTML, CSS ( Figma )
                <br />
                <span class="badge badge-ghost badge-sm">UI UX Design</span>
              </td>
              <td>Ready</td>
              <th>
                <button class="btn btn-ghost btn-xs">Github</button>
              </th>
            </tr>

            {{-- row 3 --}}
            <tr>
              <th>
                <label>
                  <input type="checkbox" class="checkbox" />
                </label>
              </th>
              <td>
                <div class="flex items-center gap-3">
                  <div>
                    <div class="font-bold">TobeStore ID </div>
                    <div class="text-sm opacity-50">E-Commerce WebApp</div>
                  </div>
                </div>
              </td>
              <td>
                PHP ( Laravel )
                <br />
                <span class="badge badge-ghost badge-sm">Website App</span>
              </td>
              <td>Ready</td>
              <th>
                <button class="btn btn-ghost btn-xs">Github</button>
              </th>

       {{-- row 4 --}}
       <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <td>
          <div class="flex items-center gap-3">
            <div>
              <div class="font-bold">UI Agency Profile </div>
              <div class="text-sm opacity-50">Profile Company UI</div>
            </div>
          </div>
        </td>
        <td>
          PHP ( Laravel )
          <br />
          <span class="badge badge-ghost badge-sm">Website App</span>
        </td>
        <td>Update Pending</td>
        <th>
          <button class="btn btn-ghost btn-xs">Github</button>
        </th>

       {{-- row 5 --}}
       <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <td>
          <div class="flex items-center gap-3">
            <div>
              <div class="font-bold">Pembayaran Pesantren </div>
              <div class="text-sm opacity-50"></div>
            </div>
          </div>
        </td>
        <td>
          PHP ( Laravel )
          <br />
          <span class="badge badge-ghost badge-sm">Website App</span>
        </td>
        <td>Update Pending</td>
        <th>
          <button class="btn btn-ghost btn-xs">Github</button>
        </th>

       {{-- row 6 --}}
       <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <td>
          <div class="flex items-center gap-3">
            <div>
              <div class="font-bold"> Penghitung Ahli Waris </div>
              <div class="text-sm opacity-50"> </div>
            </div>
          </div>
        </td>
        <td>
          JavaScript
          <br />
          <span class="badge badge-ghost badge-sm">Website App</span>
        </td>
        <td>Ready ( Develop )</td>
        <th>
          <button class="btn btn-ghost btn-xs">Github</button>
        </th>
      </tr>
  </table>
</div>


    {{-- about me --}}
    <div class="min-h-screen hero bg-base-200" id="AboutMe">
        <div class="text-center hero-content">
          <div class="max-w-md">
            <h1 class="text-5xl font-bold">About Me</h1>
            <p class="py-6">
              Lulusan SMK Multimedia, dan sekarang menjalani pendidikan sebagai Mahasiswa Ilmu komputer Teknik informatika semester 5,
              Seorang konten kreator dan memiliki pengalaman
              dan keahlian dibidang UI-UX disebuah Agency. Berantusias tinggi dalam mengembangkan Website, UI, dan kemampuan
              dalam public speaking yang baik
            </p>
            {{-- <button class="btn btn-primary">Get Started</button> --}}
          </div>
        </div>
      </div>
      <br>

    {{-- work experience --}}
    <div class="min-h-screen hero bg-base-200" id="work">
    <ul class="timeline timeline-snap-icon max-md:timeline-compact timeline-vertical">
        <br>
        <p style="text-align: center">work experience</p>
        <br>
        <li>
          <div class="timeline-middle">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="w-5 h-5">
              <path
                fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                clip-rule="evenodd" />
            </svg>
          </div>
          <div class="mb-10 timeline-start md:text-end">
            <time class="font-mono italic">2017-2020</time>
            <div class="text-lg font-black">Designer Graphics - Freelance</div>
            Pembuatan Identitas Merk atau Brand <br>
            Pengolahan dan manipulasi Vektor <br>
            Pembuatan desain Poster atau banner
          </div>
          <hr />
        </li>
        <li>
          <hr />
          <div class="timeline-middle">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="w-5 h-5">
              <path
                fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                clip-rule="evenodd" />
            </svg>
          </div>
          <div class="mb-10 timeline-end">
            <time class="font-mono italic">2019</time>
            <div class="text-lg font-black">IT Technician - Magang</div>
            Ahli dalam Installasi OS <br>
            Memperbaiki hardware <br>
            Melakukan installasi software <br>
            Merakit PC
          </div>
          <hr />
        </li>
        <li>
          <hr />
          <div class="timeline-middle">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="w-5 h-5">
              <path
                fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                clip-rule="evenodd" />
            </svg>
          </div>
          <div class="mb-10 timeline-start md:text-end">
            <time class="font-mono italic">2020-2021</time>
            <div class="text-lg font-black">Content Creator</div>
            Mengembangkan strategi pembuatan konten <br>
            Menganalisa performa konten <br>
            Menciptakan sebuah konten yang menyeseuaikan algoritma tren <br>

          </div>
          <hr />
        </li>
        <li>
          <hr />
          <div class="timeline-middle">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="w-5 h-5">
              <path
                fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                clip-rule="evenodd" />
            </svg>
          </div>
          <div class="mb-10 timeline-end">
            <time class="font-mono italic">2021-2022</time>
            <div class="text-lg font-black">Talent Scout Media Social Agency</div>
            Mengidentifikasi strategi perekrutan new talent <br>
            Melakukan sesi wawancara dan penilaian <br>
            Memelihara hubungan dan komunikasi dengan team <br>
            Membantu talent untuk mengidentifikasi tren
          </div>
          <hr />
        </li>
        <li>
          <hr />
          <div class="timeline-middle">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="w-5 h-5">
              <path
                fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                clip-rule="evenodd" />
            </svg>
          </div>
          <div class="mb-10 timeline-start md:text-end">
            <time class="font-mono italic">2024</time>
            <div class="text-lg font-black">UI-UX Designer</div>
            Merancang pembuatan desain Website <br>
            Ahli dalam pembuatan UI menggunakan Figma <br>
            Memastikan keselarasan dan kolaborasi dengan FE dan BE
          </div>
        </li>
      </ul>
      </div>
      <br>

      {{-- My Studied --}}

    {{-- My Project --}}

    {{-- footer --}}
    <footer class="p-10 rounded footer footer-center bg-base-200 text-base-content">
        <nav class="grid grid-flow-col gap-4">
          <a class="link link-hover" href="#AboutMe">About us</a>
          <a class="link link-hover" href="#Contact">Contact</a>
          <a class="link link-hover" href="#work">Jobs</a>
          <a class="link link-hover" href="https://github.com/Chasoul-VSCode">Github</a>
        </nav>
        <nav>
          <div class="grid grid-flow-col gap-4">
            <a>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                class="fill-current">
                <path
                  d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
              </svg>
            </a>
            <a>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                class="fill-current">
                <path
                  d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
              </svg>
            </a>
            <a>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                class="fill-current">
                <path
                  d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
              </svg>
            </a>
          </div>
        </nav>
        <aside>
          <p>Website created by Chasoul.uix @2024 </p>
        </aside>
      </footer>
</body>
</html>

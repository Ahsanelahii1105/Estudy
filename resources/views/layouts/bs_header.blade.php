<!doctype html>
<html lang="en">

<head>
   <title>Title</title>
   <!-- Required meta tags -->
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

   <!-- Bootstrap CSS v5.2.1 -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
   <header>
      <nav class="navbar navbar-expand-sm navbar-light bg-light">
         <div class="container">
            <a class="navbar-brand" href="#">MindGrower</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
               data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
               aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
               <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                  <li class="nav-item">
                     <a class="nav-link {{Request::is('admin/home') ? 'active' : ''}}" href="/"
                        aria-current="page">Home<span class="visually-hidden">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{Request::is('admin/insertsubject') ? 'active' : ''}}"
                        href="/admin/insertsubject">Insert Subject</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{Request::is('admin/insertclass') ? 'active' : ''}}"
                        href="/admin/insertclass">Insert class</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{Request::is('admin/insertcourse') ? 'active' : ''}}"
                        href="/admin/insertcourse">Insert Course</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{Request::is('admin/insertsub') ? 'active' : ''}}"
                        href="/admin/insertsub">Insert Sub main</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{Request::is('admin/insertfaculty') ? 'active' : ''}}"
                        href="/admin/insertfaculty">Insert Faculty Data</a>
                  </li>
               </ul>
               <div class="d-flex my-2 my-lg-0">
                  @if (Route::has('login'))
                 <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                   @auth
                  <form method="POST" action="{{ route('logout') }}" x-data>
                     @csrf
                     <button type="submit" class="btn btn-outline-danger" @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                     </button>
                  </form>

               @else
               <a href="{{ route('login') }}"
                class="btn btn-primary px-4">Log
                in</a>
            @endauth
                 </div>
              @endif
               </div>
            </div>
         </div>
      </nav>

   </header>
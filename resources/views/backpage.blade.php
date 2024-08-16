@extends('layouts.maintwo')

@section('content')
    
<div class="container  mb-5">
        <div
          class="d-flex flex-column align-items-center justify-content-center"
          >
         <div class="card" style="height: 100px; width: 80%;">
            <img class="img" src="/img/backpage.jpg" alt="Title" />
          </div>

            <div class="card-1">

              <h2 class="Online" >Online IT and Computing Courses</h2>
              <p class="text1">IT is one of our most popular categories, with in-depth courses and tutorials across all aspects of information technology. Sign up today to learn about cryptocurrency, blockchain, computer networking and server management. You can take free classes for in-demand languages like Python, JavaScript and C++, applying for official certification to take your programming career to the next level. We also cover growing skills like pentesting, full stack and MEAN stack development, and database management.</p>
                  </div>

                  <div class="card-2"> 
              <h2 class="Android"> Android Basic With Compose</h2>
              <p class="text2">This is the recommended course to start learning Android! Build a series of apps using Jetpack Compose, the modern toolkit for creating beautiful user interfaces on Android. You will write these apps in the Kotlin programming language and learn best practices in Material Design, app architecture, data storage, fetching data from the network, testing, and more. No programming experience required.
                   <br>    
               Mobile UIs, or front-ends, rely on mobile back-ends to support access to enterprise systems. The mobile back-end facilitates data routing, security, authentication, authorization, working off-line, and service orchestration. This functionality is supported by a mix of middleware components, including mobile app servers, mobile backend as a service (MBaaS), and service-oriented architecture (SOA) infrastructure.</p>
             </div>   

             <div class="card-3">     
                <h2 class="webdevelopment">All Web Development Courses</h2>
               <p class="rext3">Each aspect of creating websites and applications entails a unique set of skills. We offers a host of courses to bring you up to speed on modern front-end, back-end, and fullstack web development practices and skills.</p>
               </div>

                 <div class="card-4">
              
              <h2 class="Comments">23 Comments</h2>
              <br>
              <h3 style="color: black;">Hadia</h3>
              <p>Great course! Learned a lot about Python programming. Excellent instructor, explained complex concepts in a clear and concise manner."
              </p>
              </div>
              
              <div class="card-5">
              
              <h3 style="color: black;">Zara</h3>
              <p>Thanks for the valuable resources and support, I feel more confident in my IT skills now.Course material was well-structured and easy to follow.</p>
                
              </div>

              <div class="card-6">
                <h3 style="color: black;">Husnain</h3>
                <p> Instructor was very responsive and helpful with questions and doubts.Instructor was very responsive and helpful with questions and doubts.
                </p>
              </div>

              <br><br>
              <div class="box">             
                 <h1>Say Something</h1>
                </div>
                </div>
                
              
              <form action="back page.html" method="post">
            
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row mb-4">
                    <div class="col">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form6Example1" class="form-control" />
                        <label class="form-label" for="form6Example1">First name</label>
                      </div>
                    </div>

                    <div class="col">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form6Example2" class="form-control" />
                        <label class="form-label" for="form6Example2">Last name</label>
                      </div>
                    </div>
                  
                
                  <!-- Email input -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form6Example5" class="form-control" />
                    <label class="form-label" for="form6Example5">Email</label>
                  </div>
                
                  <!-- Number input -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="number" id="form6Example6" class="form-control" />
                    <label class="form-label" for="form6Example6">Your subject of this message </label>
                  </div>
                
                  <!-- Message input -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                    <label class="form-label" for="form6Example7">Say something about this message</label>
                  </div>
                
                  
                  <!-- Submit button -->
                  <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Post Comments</button>
                </form>
                </div>
            
          


              
              
            
            </div>    
         </div>
         
        </div>    
    </div>

@endsection

<!DOCTYPE html>
<html lang="en" data-theme="dim">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    @vite('resources/css/app.css') <!-- Tailwind CSS -->
    @livewireStyles
</head>
<body>

    <!-- Header -->
    <div class="hero min-h-screen relative">
        {{-- Theme Swapper --}}
        <div class="absolute top-4 right-4">
            <label class="swap swap-rotate">
                <!-- this hidden checkbox controls the state -->
                <input type="checkbox" class="theme-controller" value="luxury" />
              
                <!-- sun icon -->
                <svg
                  class="swap-off h-10 w-10 fill-current"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24">
                  <path
                    d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                </svg>
              
                <!-- moon icon -->
                <svg
                  class="swap-on h-10 w-10 fill-current"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24">
                  <path
                    d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                </svg>
              </label>
        </div>
        
        <div class="hero-content text-center">
          <div class="max-w-md">
            <h1 class="text-5xl font-bold">Hello, I'm Ezekiel!</h1>
            <p class="py-6">
                Full-Stack Developer | Creative Design & Functional Development
            </p>
            <div class="space-x-4">
                <a href="{{ asset('resume/Ezekiel-Kang Resume.pdf') }}" download>
                    <button class="btn btn-primary">Download Resume</button>
                </a>
                <button class="btn btn-primary" id="viewWorkBtn">View Work</button>
            </div>
          </div>
        </div>
      </div>

     {{-- <!-- Blackjack Table Section -->
     <div class="hero min-h-screen bg-cover bg-center bg-no-repeat text-white" style="background-image: url('/images/greenbg.jpg');">
        
        <!-- Blackjack Table -->
        <div class="relative flex flex-col w-11/12 max-w-5xl h-[90vh] max-h-[600px] mx-auto bg-emerald-800 border-8 border-amber-900 rounded-[200px] shadow-2xl overflow-hidden">
            
            <!-- Logo Section (Top) -->
            <div class="flex justify-center mt-8">
                <div id="logo-container" class="overflow-hidden bg-white border-4 border-yellow-400 rounded-full cursor-pointer w-32 h-32 shadow-lg z-10">
                    <img src="{{ asset('images/profile.png') }}" alt="Table Logo" id="table-logo" class="object-cover w-full h-full">
                </div>
            </div>
            
            <!-- Arc Rule Lines -->
            <div class="flex flex-col items-center px-12 relative">
                <!-- Arc 1 (Top) -->
                <div class="w-full h-32 border-b-4 border-yellow-400 rounded-b-[100%] relative">
                </div>
                
                <!-- Arc 2 (Middle) -->
                <div class="w-4/5 h-32 border-b-4 border-yellow-400 rounded-b-[100%] relative -mt-16">
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 bg-emerald-800 px-4 -mt-2">
                        <span class="text-yellow-400 font-bold text-lg" contenteditable="true">Hello I'm Ezekiel Kang</span>
                    </div>
                </div>
                
                <!-- Arc 3 (Bottom) -->
                <div class="w-3/5 h-32 border-b-4 border-yellow-400 rounded-b-[100%] relative -mt-16">
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 bg-emerald-800 px-4 -mt-2">
                        <span class="text-yellow-400 font-bold text-lg" contenteditable="true">Explore my Projects!</span>
                    </div>
                </div>
            </div>
            
            <!-- Player Section -->
            <div class="flex justify-around px-12 mt-auto mb-12 relative">
                <div class="flex items-center justify-center w-24 h-24 font-bold text-white transition-all duration-300 bg-black bg-opacity-20 border-2 border-yellow-400 rounded-full cursor-pointer hover:bg-opacity-40 hover:scale-105" id="project-1">
                    PROJECT 1
                </div>
                <div class="flex items-center justify-center w-24 h-24 font-bold text-white transition-all duration-300 bg-black bg-opacity-20 border-2 border-yellow-400 rounded-full cursor-pointer hover:bg-opacity-40 hover:scale-105" id="project-2">
                    PROJECT 2
                </div>
                <div class="flex items-center justify-center w-24 h-24 font-bold text-white transition-all duration-300 bg-black bg-opacity-20 border-2 border-yellow-400 rounded-full cursor-pointer hover:bg-opacity-40 hover:scale-105" id="project-3">
                    PROJECT 3
                </div>
                <div class="flex items-center justify-center w-24 h-24 font-bold text-white transition-all duration-300 bg-black bg-opacity-20 border-2 border-yellow-400 rounded-full cursor-pointer hover:bg-opacity-40 hover:scale-105" id="project-4">
                    PROJECT 4
                </div>
                <div class="flex items-center justify-center w-24 h-24 font-bold text-white transition-all duration-300 bg-black bg-opacity-20 border-2 border-yellow-400 rounded-full cursor-pointer hover:bg-opacity-40 hover:scale-105" id="project-5">
                    PROJECT 5
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Projects Section -->
    <section id="projects" class="p-10 text-center">
        <h2 class="text-5xl font-bold mb-6">Projects</h2>
        
        <div class="carousel carousel-center bg-neutral rounded-box w-full space-x-4 p-4">
            <!-- Project 1 -->
            <div class="carousel-item">
              <img
                src="/images/locallibrary.png"
                alt="Project 1"
                class="project-image w-[300px] h-[400px] object-cover"
                data-modal="project1-modal"
              />
              <dialog id="project1-modal" class="modal modal-bottom sm:modal-middle">
                <div class="modal-box min-w-[85vw]">
                    <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </form>
                  <h3 class="text-lg font-bold">Local Library</h3>
                  <p class="py-4">
                    Explore my Local Library project. This basic Express website provides a platform to manage library records efficiently. Users can browse books, authors, genres, and book instances dynamically, with the ability to create new records seamlessly. 
                    <a href="https://github.com/ezekieljkang/localLibrary">
                        View source code.
                    </a>
                </p>
                <p>
                    <strong>
                        Technologies Used: 
                    </strong>
                    HTML/CSS, JavaScript, Express, Pug, and Bootstrap.
                </p>
                <p>
                    <strong>
                        Skills Utilized:
                    </strong>
                    Dynamic Content Rendering, Form Handling, and RESTful API Integration.
                </p>
                <p>
                    <strong>
                        Project Highlights:
                    </strong>
                    Record Management, User-Friendly Interface, and Responsive Design.
                </p>
                <div class="m-4 space-y-6">
                    <div>
                        <p class="text-start mb-2">Home Page</p>
                        <img
                            src="/images/libraryhome.png"
                        />
                    </div>
                    <div>
                        <p class="text-start mb-2">Create Book Page</p>
                        <img
                            src="/images/librarycreatebook.png"
                        />
                    </div>
                    <div>
                        <p class="text-start mb-2">Book Status Page</p>
                        <img
                            src="/images/libraryinstance.png"
                        />
                    </div>
                </div>
                  <div class="modal-action">
                    <form method="dialog">
                      <button class="btn">Close</button>
                    </form>
                  </div>
                </div>
              </dialog>
            </div>
          
            <!-- Project 2 -->
            <div class="carousel-item">
                <img
                  src="/images/carmost.png"
                  alt="Project 2"
                  class="project-image w-[300px] h-[400px] object-cover"
                  data-modal="project2-modal"
                />
                <dialog id="project2-modal" class="modal modal-bottom sm:modal-middle">
                  <div class="modal-box min-w-[85vw]">
                    <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </form>
                    <h3 class="text-lg font-bold"> Used Car Listing</h3>
                    <p class="py-4">
                        Discover my Used Car Listing application. This web application showcases a comprehensive inventory of used cars with real-time updates and detailed information. Users can browse through a wide range of vehicles and view detailed car profiles. With a sleek and intuitive interface, this project demonstrates my expertise in Express, EJS, and MongoDB integration.
                      <a href="https://github.com/ezekieljkang/usedCarListing">
                          View source code.
                      </a>
                  </p>
                  <p>
                      <strong>
                          Technologies Used: 
                      </strong>
                      Express, EJS, MongoDB, and Bootstrap.
                  </p>
                  <p>
                      <strong>
                          Skills Utilized:
                      </strong>
                      Real-Time Data Handling, and Dynamic Content Rendering.
                  </p>
                  <p>
                      <strong>
                          Project Highlights:
                      </strong>
                      Comprehensive Car Listings, Detailed Vehicle Information, and User-Friendly Design.
                  </p>
                  <div class="m-4 space-y-6">
                      <div>
                          <p class="text-start mb-2">Inventory Page</p>
                          <img
                              src="/images/carmostdata.png"
                          />
                      </div>
                  </div>
                    <div class="modal-action">
                      <form method="dialog">
                        <button class="btn">Close</button>
                      </form>
                    </div>
                  </div>
                </dialog>
            </div>
          
            <!-- Project 3 -->
            <div class="carousel-item">
                <img
                  src="/images/geminithumbnail.jpg"
                  alt="Project 3"
                  class="project-image w-[300px] h-[400px] object-cover"
                  data-modal="project3-modal"
                />
                <dialog id="project3-modal" class="modal modal-bottom sm:modal-middle">
                  <div class="modal-box min-w-[85vw]">
                    <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </form>
                    <h3 class="text-lg font-bold">Google Gemini Clone</h3>
                    <p class="py-4">
                        Discover the capabilities of my 
                        <a href="https://ezekieljkang.github.io/gemini-clone/">
                            Gemini Clone project.
                        </a> This web application leverages Google's Generative AI to provide intelligent responses based on user input. With a sleek, responsive design, it showcases my expertise in integrating AI models, managing dynamic content, and ensuring a smooth user experience. 
                      <a href="https://github.com/ezekieljkang/localLibrary">
                          View source code.
                      </a>
                  </p>
                  <p>
                      <strong>
                          Technologies Used: 
                      </strong>
                      React, Vite, Tailwind CSS, and Google's Generative AI.
                  </p>
                  <p>
                      <strong>
                          Skills Utilized:
                      </strong>
                      AI Integration, Responsive Design, and Dynamic Content Rendering.
                  </p>
                  <p>
                      <strong>
                          Project Highlights:
                      </strong>
                      Intelligent AI Responses, Interactive UI Components, and Real-Time Data Handling.
                  </p>
                  <div class="m-4 space-y-6">
                      <div>
                          <p class="text-start mb-2">Home Page</p>
                          <img
                              src="/images/geminiclone.png"
                          />
                      </div>
                  </div>
                    <div class="modal-action">
                      <form method="dialog">
                        <button class="btn">Close</button>
                      </form>
                    </div>
                  </div>
                </dialog>
            </div>
          
            <!-- Project 4 -->
            <div class="carousel-item">
                <img
                  src="/images/tshirt.png"
                  alt="Project 4"
                  class="project-image w-[300px] h-[400px] object-cover"
                  data-modal="project4-modal"
                />
                <dialog id="project4-modal" class="modal modal-bottom sm:modal-middle">
                  <div class="modal-box min-w-[85vw]">
                    <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                      </form>
                    <h3 class="text-lg font-bold">T-Shirt Maker</h3>
                    <p class="py-4">
                        Unleash your creativity with my interactive 
                        <a href="https://ezekieljkang.github.io/t-shirt-maker/">
                            T-shirt Maker project.
                        </a>
                         This web application allows users to customize T-shirts in real-time, choosing text, font, size, and color. With a user-friendly interface, the project showcases my skills in integrating dynamic features and handling user inputs.
                      <a href="https://github.com/ezekieljkang/t-shirt-maker">
                          View source code.
                      </a>
                  </p>
                  <p>
                      <strong>
                          Technologies Used: 
                      </strong>
                      HTML/CSS, JavaScript, and Bootstrap.
                  </p>
                  <p>
                      <strong>
                          Skills Utilized:
                      </strong>
                      Dynamic Content Rendering, Form Handling, and Real-Time Updates.
                  </p>
                  <p>
                      <strong>
                          Project Highlights:
                      </strong>
                      Custom Text and Design Options, Real-Time T-shirt Preview, and Shopping Cart Integration.
                  </p>
                  <div class="m-4 space-y-6">
                      <div>
                          <p class="text-start mb-2">Home Page</p>
                          <img
                              src="/images/tshirtmaker.png"
                          />
                      </div>
                  </div>
                    <div class="modal-action">
                      <form method="dialog">
                        <button class="btn">Close</button>
                      </form>
                    </div>
                  </div>
                </dialog>
            </div>
          
            <!-- Project 5 -->
            <div class="carousel-item">
                <img
                  src="/images/project1.png"
                  alt="Project 5"
                  class="project-image w-[300px] h-[400px] object-cover"
                  data-modal="project5-modal"
                />
                <dialog id="project5-modal" class="modal modal-bottom sm:modal-middle">
                  <div class="modal-box min-w-[85vw]">
                    <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </form>
                    <h3 class="text-lg font-bold">Custom Portfolio</h3>
                    <p class="py-4">
                        Explore my 
                        <a href="https://ezekieljkang.github.io/portfolio-template/">
                            Portfolio Template
                        </a>
                        , built with NextJS. This dynamic and responsive website showcases my work as a web developer, featuring interactive elements, smooth transitions, and a password-protected area for exclusive content. This project demonstrates my skills in implementing modern web technologies and ensuring a seamless user experience.
                      <a href="https://github.com/ezekieljkang/portfolio-template">
                          View source code.
                      </a>
                  </p>
                  <p>
                      <strong>
                          Technologies Used: 
                      </strong>
                      Next.js, React, Tailwind CSS, TypeScript, GitHub Pages, and Lottie.
                  </p>
                  <p>
                      <strong>
                          Skills Utilized:
                      </strong>
                      Dynamic Content Rendering, Responsive Design, and Animation Integration.
                  </p>
                  <p>
                      <strong>
                          Project Highlights:
                      </strong>
                      Interactive Elements, Smooth Transitions, GitHub Pages Deployment, and Automated Build and Deployment with GitHub Actions.
                  </p>
                  <div class="m-4 space-y-6">
                      <div>
                          <p class="text-start mb-2">Home Page</p>
                          <img
                              src="/images/portfoliotemplate.png"
                          />
                      </div>
                  </div>
                    <div class="modal-action">
                      <form method="dialog">
                        <button class="btn">Close</button>
                      </form>
                    </div>
                  </div>
                </dialog>
            </div>

            <!-- Project 6 -->
            <div class="carousel-item">
                <img
                  src="/images/gipylogo.jpg"
                  alt="Project 6"
                  class="project-image w-[300px] h-[400px] object-cover"
                  data-modal="project6-modal"
                />
                <dialog id="project6-modal" class="modal modal-bottom sm:modal-middle">
                  <div class="modal-box min-w-[85vw]">
                    <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </form>
                    <h3 class="text-lg font-bold">Giphy API</h3>
                    <p class="py-4">
                        Explore the fun of GIFs with my interactive 
                        <a href="https://ezekieljkang.github.io/giphyApi/">
                            Giphy API project.
                        </a>
                        This application lets you search for GIFs based on your preferred terms and displays them instantly. Leveraging the Giphy API, this project demonstrates my ability to integrate third-party APIs into web applications for a dynamic user experience.
                      <a href="https://github.com/ezekieljkang/giphyApi">
                          View source code.
                      </a>
                  </p>
                  <p>
                      <strong>
                          Technologies Used: 
                      </strong>
                      HTML/CSS, JavaScript, and Giphy API.
                  </p>
                  <p>
                      <strong>
                          Skills Utilized:
                      </strong>
                      API Integration, Asynchronous JavaScript, and User Interaction.
                  </p>
                  <p>
                      <strong>
                          Project Highlights:
                      </strong>
                      Instant GIF Updates, Error Handling, and User-Friendly Interface.
                  </p>
                  <div class="m-4 space-y-6">
                      <div>
                          <p class="text-start mb-2">Home Page</p>
                          <img
                              src="/images/giphypage.png"
                              class="min-w-[80vw]"
                          />
                      </div>
                  </div>
                    <div class="modal-action">
                      <form method="dialog">
                        <button class="btn">Close</button>
                      </form>
                    </div>
                  </div>
                </dialog>
            </div>

            <!-- Project 7 -->
            <div class="carousel-item">
                <img
                  src="/images/evpage.png"
                  alt="Project 7"
                  class="project-image w-[300px] h-[400px] object-cover"
                  data-modal="project7-modal"
                />
                <dialog id="project7-modal" class="modal modal-bottom sm:modal-middle">
                  <div class="modal-box min-w-[85vw]">
                    <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </form>
                    <h3 class="text-lg font-bold">Landing Page</h3>
                    <p class="py-4">
                        Explore the dynamic features of my 
                        <a href="https://ezekieljkang.github.io/ev-page/">
                            EV page project.
                        </a>
                         This web application features an interactive hero section with video and image backgrounds, a navigation bar, and smooth transitions. It demonstrates my skills in using React for dynamic UI elements and integrating multimedia content.
                      <a href="https://ezekieljkang.github.io/ev-page/">
                          View source code.
                      </a>
                  </p>
                  <p>
                      <strong>
                          Technologies Used: 
                      </strong>
                      React, Vite, Tailwind CSS, and PropTypes.
                  </p>
                  <p>
                      <strong>
                          Skills Utilized:
                      </strong>
                      Dynamic Content Management, Multimedia Integration, and Responsive Design.
                  </p>
                  <p>
                      <strong>
                          Project Highlights:
                      </strong>
                      Interactive Hero Section with Video and Image Backgrounds, Responsive Navbar, and Smooth Transitions.
                  </p>
                  <div class="m-4 space-y-6">
                      <div>
                          <p class="text-start mb-2">Home Page</p>
                          <img
                              src="/images/evpage.png"
                          />
                      </div>
                  </div>
                    <div class="modal-action">
                      <form method="dialog">
                        <button class="btn">Close</button>
                      </form>
                    </div>
                  </div>
                </dialog>
            </div>
        </div>
    </section>

    {{-- Skills Section --}}
    <section id="skills" class="p-10">
        <h2 class="text-5xl font-bold mb-6 text-center">Skills & Interests</h2>
        
        <!-- Frontend -->
        <div class="mb-8">
          <h3 class="text-2xl font-semibold mb-4">Frontend</h3>
          <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6 justify-center">
            <div class="text-center">
              <img src="/images/tail.svg" alt="TailwindCSS" class="h-12 mx-auto mb-2">
              <p>TailwindCSS</p>
            </div>
            <div class="text-center">
              <img src="/images/daisyui.svg" alt="DaisyUI" class="h-12 mx-auto mb-2">
              <p>DaisyUI</p>
            </div>
            <div class="text-center">
              <img src="/images/react.svg" alt="React" class="h-12 mx-auto mb-2">
              <p>React</p>
            </div>
            <div class="text-center">
              <img src="/images/next.svg" alt="Next.js" class="h-12 mx-auto mb-2">
              <p>Next.js</p>
            </div>
            <div class="text-center">
              <img src="/images/redux.svg" alt="Redux" class="h-12 mx-auto mb-2">
              <p>Redux</p>
            </div>
            <div class="text-center">
              <img src="/images/typescript.svg" alt="TypeScript" class="h-12 mx-auto mb-2">
              <p>TypeScript</p>
            </div>
            <div class="text-center">
              <img src="/images/jest.svg" alt="Jest" class="h-12 mx-auto mb-2">
              <p>Jest</p>
            </div>
          </div>
        </div>
      
        <!-- Backend -->
        <div class="mb-8">
          <h3 class="text-2xl font-semibold mb-4">Backend</h3>
          <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6 justify-center">
            <div class="text-center">
              <img src="/images/laravel.svg" alt="Laravel" class="h-12 mx-auto mb-2">
              <p>Laravel</p>
            </div>
            <div class="text-center">
              <img src="/images/livewire.svg" alt="Livewire" class="h-12 mx-auto mb-2">
              <p>Livewire</p>
            </div>
            <div class="text-center">
              <img src="/images/php.svg" alt="PHP" class="h-12 mx-auto mb-2">
              <p>PHP</p>
            </div>
            <div class="text-center">
              <img src="/images/nodejs.svg" alt="Node.js" class="h-12 mx-auto mb-2">
              <p>Node.js</p>
            </div>
          </div>
        </div>
      
        <!-- Databases -->
        <div class="mb-8">
          <h3 class="text-2xl font-semibold mb-4">Databases</h3>
          <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6 justify-center">
            <div class="text-center">
              <img src="/images/mysql.svg" alt="MySQL" class="h-12 mx-auto mb-2">
              <p>MySQL</p>
            </div>
            <div class="text-center">
              <img src="/images/postgresql.svg" alt="PostgreSQL" class="h-12 mx-auto mb-2">
              <p>PostgreSQL</p>
            </div>
            <div class="text-center">
              <img src="/images/mongodb.svg" alt="MongoDB" class="h-12 mx-auto mb-2">
              <p>MongoDB</p>
            </div>
          </div>
        </div>
      
        <!-- Version Control -->
        <div class="mb-8">
          <h3 class="text-2xl font-semibold mb-4">Version Control & Tools</h3>
          <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6 justify-center">
            <div class="text-center">
              <img src="/images/github.svg" alt="GitHub" class="h-12 mx-auto mb-2">
              <p>GitHub</p>
            </div>
            <div class="text-center">
              <img src="/images/docker.svg" alt="Docker" class="h-12 mx-auto mb-2">
              <p>Docker</p>
            </div>
          </div>
        </div>
      </section>
    
    <!-- About Me Section -->
    <section id="about" class="p-10 text-center">
        <h2 class="text-5xl font-bold mb-6">About Me</h2>
        <p class="max-w-3xl mx-auto mb-4">I&apos;m a web developer with experience in front-end and back-end technologies, including JavaScript, React, PHP, Laravel, and Databases.</p>
        
        <p class="max-w-3xl mx-auto mb-4">
            I&apos;ve always had a passion for data, statistics, and numbers, and I&apos;m fascinated by how we interact with them daily, often without realizing it. I&apos;m eager to learn how cloud computing and storage systems manage and work with data, optimizing how numbers and information are processed and utilized. I believe data is crucial for innovation, and I&apos;m excited to deepen my understanding of how cloud technologies can scale and enhance data-driven decision-making.
        </p>
    </section>

    <!-- Blackjack Game -->
    <section id="blackjack" class="p-10 text-center">
        <h2 class="text-3xl font-bold mb-4">Blackjack Game</h2>
        <livewire:game.blackjack />
    </section>

    {{-- Blackjack Info  --}}
    <h2 class="text-3xl font-bold mb-4 text-center">Let&apos;s talk Numbers</h2>
    <div class="collapse bg-base-100 border-base-300 border">
        <input type="checkbox" />
        <div class="collapse-title font-semibold">Do You Know Blackjack? If Not, Click Here To Learn.</div>
        <div class="collapse-content text-sm">
            <h3 class="text-xl font-bold mt-2">Learn by Playing?</h3>
            <p>Play a few games above</p>

            <h3 class="text-xl font-bold mt-2">Visual Learner?</h3>
            <a href="https://www.youtube.com/watch?v=PljDuynF-j0&ab_channel=BlackjackApprenticeship">Click for Youtube Link</a>

            <h3 class="text-xl font-bold mt-2">Wikipedia on Blackjack</h3>
            <a href="https://en.wikipedia.org/wiki/Blackjack">Click for Wikipedia</a>

            <h3 class="text-xl font-bold mt-2">1. Card Values</h3>
                <li>Number Cards (2-10): Worth their face value.</li>
                <li>Face Cards (J, Q, K): Worth 10 points each.</li>
                <li>Ace (A): Worth 1 or 11 points, whichever helps your hand more.</li>
            <h3 class="text-xl font-bold mt-2">2. How the Game Works</h3>
                <p>Step 1: Each player gets two cards, and so does the dealer. One of the dealer’s cards is face-up.</p>
                <p>Step 2: Add up your card values to get your total.</p>
                <p>Step 3: You can choose to:</p>
                <li>Hit (take another card).</li>
                <li>Stand (keep your current total).</li>
                <li>Double Down (double your bet and take one more card).</li>
                <li>Split (split two of the same cards into two hands).</li>
            <h3 class="text-xl font-bold mt-2">3. Dealer's Turn</h3>
                <li>The dealer must hit if their total is below 17.</li>
                <li>The dealer must hit or stand(this varies as casinos have different rules) if their total is 17 or higher.</li>
            <h3 class="text-xl font-bold mt-2">4. Winning</h3>
                <li>If your total is closer to 21 than the dealer without going over, you win!</li>
                <li>If you go over 21, you bust and lose the round.</li>
                <li>If the dealer busts, you win even if your total is less than 21.</li>
        </div>
    </div>

    {{-- Counting Cards  --}}
    <div class="collapse bg-base-100 border-base-300 border">
        <input type="checkbox" />
        <div class="collapse-title font-semibold">Do You Know How To Count Cards? If Not, Click Here To Learn</div>
        <div class="collapse-content text-sm">
            <h3 class="text-xl font-bold mt-2">Learn by Playing?</h3>
            <p>Play a few games above</p>

            <h3 class="text-xl font-bold mt-2">Visual Learner? How & Why it Works.</h3>
            <a href="https://www.youtube.com/watch?v=QLYsck5fsLU&ab_channel=StevenBridges">Click for Youtube Link</a>

            <h3 class="text-xl font-bold mt-2">Wikipedia on Card Counting</h3>
            <a href="https://en.wikipedia.org/wiki/Card_counting">Click for Wikipedia</a>

            <h3 class="text-xl font-bold mt-2">How to Count Cards Using the Hi-Lo System</h3>
            <p>There are different systems, but I personally believe this seems to be the easiest.</p>

            <h3 class="text-xl font-bold mt-2">1. Card Values</h3>
                <li>2-6: Count as +1.</li>
                <li>7-9: Count as 0 (neutral, no change).</li>
                <li>10, J, Q, K, A: Count as -1.</li>

            <h3 class="text-xl font-bold mt-2">2. Running Count</h3>
                <p>Start with a running count of 0.</p>
                <p>As the cards are dealt, adjust your count based on the card values:</p>
                <li>+1 for each 2-6.</li>
                <li>0 for each 7-9.</li>
                <li>-1 for each 10, J, Q, K, A.</li>
            
            <h3 class="text-xl font-bold mt-2">3. True Count</h3>
                <p>To get a more accurate count, divide the running count by the number of decks remaining in the shoe.</p>
                <li>For example, if your running count is +6 and there are 3 decks left, your true count is +2 (6 ÷ 3 = 2).</li>
            
            <h3 class="text-xl font-bold mt-2">4. Using the Count</h3>
                <li>Positive Running Count (+1 or more): The deck has more high cards remaining, which benefits the player. Increase your bet.</li>
                <li>Negative Running Count (-1 or lower): The deck has more low cards, which benefits the dealer. Decrease your bet or bet the minimum.</li>

            <h3 class="text-xl font-bold mt-2">Notice & D</h3>
                <p>Card counting is legal, but casinos may ask you to leave if they suspect you&apos;re counting.</p>
        </div>
    </div>

    {{-- House Edge  --}}
    <div class="collapse bg-base-100 border-base-300 border">
        <input type="checkbox" />
        <div class="collapse-title font-semibold">The Numbers(Percentages). Player vs House Edge.</div>
        <div class="collapse-content text-sm">
            <h3 class="text-xl font-bold mt-2">1. Normal Blackjack (No Strategy)</h3>
                <p>House Edge: Without using any strategy, the house edge is typically about 2%</p>
                <p>Winning Probability: On average, players win 42-44% of the time, lose 48-49% of the time, and push (tie) 8-9%.</p>
                <p>Expected Return: Without strategy, a player can expect to lose around $2 for every $100 wagered.</p>

            <h3 class="text-xl font-bold mt-2">2. Blackjack with Basic Strategy</h3>
                <a href="/images/basicstrat.webp" target="_blank">
                    <h3 class="text-md font-bold my-2">click to view basic strategy chart</h3>
                </a>
                <p>House Edge: By using basic strategy (the mathematically optimal way to play each hand), the house edge drops to around 0.5%.</p>
                <p>Winning Probability: Using basic strategy, players win around 44-45% of the time, lose around 49%, and push around 8-9%.</p>
                <p>Expected Return: A player using basic strategy can expect to lose about $0.50 for every $100 wagered.</p>

            <h3 class="text-xl font-bold mt-2">Blackjack with Card Counting (Hi-Lo System)</h3>
                <p>House Edge: With effective card counting (using the Hi-Lo system), players can gain an advantage of about 0.5-1.5% over the casino. This depends on factors like skill level, bet spread, and deck penetration.
                </p>
                <p>Winning Probability: With card counting, players can win around 50-55% of the time, depending on the true count and bet sizes.</p>
                <p>Expected Return: The expected return with card counting can vary, but experienced counters may expect to gain $1 to $2 for every $100 wagered, assuming effective strategy and a favorable count.</p>
        </div>
    </div>

    {{-- Bet Sizing & Bankroll Mgmt  --}}
    <div class="collapse bg-base-100 border-base-300 border">
        <input type="checkbox" />
        <div class="collapse-title font-semibold">Bet Sizing & Bankroll Mgmt</div>
        <div class="collapse-content text-sm">
            <h3 class="text-xl font-bold mt-2">Bet Sizing</h3>
                <p>Flat Betting: Betting the same amount each time regardless of the count or hand situation.</p>
                <p>Bet Spread: A technique often used in card counting, where you adjust your bet size based on the count.</p>
                <li>Low Count (negative or neutral): Bet the minimum.</li>
                <li>High Count (positive): Increase your bet size significantly. This allows you to maximize your profit when the deck is favorable to the player.</li>
                <p>Example:</p>
                <li>If the running count is +2 or more, increase your bet size by 2-3 times the original bet.</li>
                <li>If the running count is -2 or lower, bet the minimum or lower.</li>

            <h3 class="text-xl font-bold mt-2">Bankroll and Risk</h3>
                <p>Card counting and bet sizing require a large bankroll for several reasons:</p>
                <li>Variance: Blackjack is a game of variance, meaning results can be streaky in the short term. You might go through periods of losses (often called "negative variance"), even if you have a positive expected return in the long run.</li>
                <li>Sample Size: For the statistics to "matter" and for your edge to become significant, you need a large sample size of hands. The more hands you play, the more your edge can show itself.</li>
                <li>Dealing with Losses: During a losing streak, you may need to decrease your bet or temporarily stop playing to preserve your bankroll. Large swings can happen even if you're playing optimally.</li>
                <p>A typical card counter needs to play thousands of hands to ensure their advantage over the casino becomes noticeable.</p>

            <h3 class="text-xl font-bold mt-2">Why Bankroll is Crucial for Card Counting</h3>
                <p>Positive Expectancy: Even though card counting gives you an advantage, it's a small one (usually 0.5-1.5%). This means that your edge is gradual and can take a long time to manifest.
                </p>
                <p>Risk of Ruin: If you don’t have a sufficient bankroll to weather the inevitable losing streaks, you may run out of money before you can capitalize on your edge.</p>
                <li>A bankroll of at least 20-50 times your average bet is typically recommended to mitigate the risk of ruin.</li>
                <p>Bet Sizing and Risk: Higher bet sizes in favorable counts can lead to significant profits, but also greater potential losses. It’s crucial to adjust your bet sizes according to your bankroll and the count.</p>
        </div>
    </div>

    {{-- Disclaimer  --}}
    <div class="collapse bg-base-100 border-base-300 border">
        <input type="checkbox" />
        <div class="collapse-title font-semibold">Disclaimers</div>
        <div class="collapse-content text-sm">
          <p>I do not encourage or promote gambling in any form. The information provided is purely educational and focuses on statistical findings and numbers related to the card game, Blackjack. The purpose is to share knowledge about the mathematics behind the game, not to advocate for gambling. Please gamble responsibly and be aware of the risks involved. If you struggle with gambling there are resources to help you: National Problem Gambling Helpline (1-800-GAMBLER)</p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="p-6 text-center">
        <!-- Contact Section -->
        <section id="contact" class="p-10">
            <h2 class="text-3xl font-bold mb-4">Any Questions?</h2>
            <p>Contact me at my email: ezekieljkang@gmail.com</p>
        </section>

        <p>Made by Ezekiel Kang.</p>
    </footer>
    @vite('resources/js/app.js')
    @livewireScripts
</html>

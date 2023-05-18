<?php
/**
 * Template Name: Journals
 * The template for displaying the journals
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iMenifest
 */
get_header();
?>
     <div class="all-journals-wrapper">
          <!-- Dashboard Breadcrumb :: Start -->
          <section id="dash-breadcrumb" class="dash-breadcrumb-tree">
               <div class=""></div>
               <h3 class="dash-active-page">All Journals</h3>
               <ul class="m-0 p-0">
                    <li class="d-inline-block"><a href="dashboard.html">Dashboard</a></li>
                    <li class="d-inline-block"><i class="bi bi-chevron-right"></i></li>
                    <li class="d-inline-block">All Journals</li>
               </ul>
          </section>
          <!-- Dashboard Breadcrumb :: End -->
          <div class="journals">
               <div class="d-flex justify-content-between mb-4">
                    <div class="d-flex me-3 journal-btns">
                         <ul class="p-0 m-0 d-flex journal-btn">
                              <li class="active"><a id="alljournals-btn" href="#" class="me-3">All Journals</a></li>
                              <li><a id="myjournals-btn" href="#" class="">My Journals</a></li>
                         </ul>
                    </div>
                    <a href="#" class="journal-write-btn"><i class="bi bi-pencil-square"></i>Write
                         Journal</a>
               </div>
               <div class="journal-area-container">
                    <div class="loading-container" style="display:none;">
                         <div class="top-left"></div><div class="top-right"></div><div class="bottom-left"></div><div class="bottom-right"></div>
                    </div>
                    <div class="journal-container-inner" id="alljournals"></div>
               </div>
          </div>
     </div>
     <div class="insert-journal-wrapper" style="display:none;">
          <!-- Dashboard Breadcrumb :: Start -->
          <section id="dash-breadcrumb" class="dash-breadcrumb-tree">
               <div class=""></div>
               <h3 class="dash-active-page">Write Journal</h3>
               <ul class="m-0 p-0">
                    <li class="d-inline-block"><a href="#">Dashboard</a></li>
                    <li class="d-inline-block"><i class="bi bi-chevron-right"></i></li>
                    <li class="d-inline-block">Write Journals</li>
               </ul>
          </section>
          <!-- Dashboard Breadcrumb :: End -->
          <div class="write-journal">
               <form class="shadow-sm">
                    <div class="mb-4">
                         <label for="journal-title" class="form-label">Title</label>
                         <input type="text" class="form-control" id="journal-title"
                              placeholder="Type your journal title...">
                    </div>
                    <div class="mb-4">
                         <label for="journal-description" class="form-label">Description</label>
                         <textarea class="form-control" placeholder="Leave a comment here" id="journal-description"
                              style="height: 270px"></textarea>
                    </div>


                    <div class="write-journal-file-upload d-flex align-items-center justify-content-cente border ">
                         <label for="dropzone-file"
                              class="d-flex flex-column align-items-center justify-content-cente mx-auto p-3">
                              <div class="d-flex flex-column align-items-center justify-content-cente pt-5 pb-6">
                                   <svg aria-hidden="true" class=" " fill="none" stroke="currentColor"
                                   viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                   </path>
                                   </svg>
                                   <p class="mb-2"><span class="">Click to upload</span> or drag and
                                   drop</p>
                                   <p class="upload-file-condition">PNG, JPG (MAX.
                                   800x400px)</p>
                              </div>
                              <input id="dropzone-file" type="file" class="d-none" />
                         </label>
                    </div>

                    <div class="w-journal-btn">
                         <button>Cancel</button>
                         <button>Post As Private</button>
                         <button class="active">Post As Public</button>
                    </div>
               </form>
          </div>
     </div>


<?php get_footer(); ?>
 <!-- loader END -->
 <aside class="sidebar sidebar-base " id="first-tour" data-toggle="main-sidebar" data-sidebar="responsive">
     <div class="sidebar-header d-flex align-items-center justify-content-start">
         <a href="painel.php" class="navbar-brand">

             <!--Logo start-->
             <div class="logo-main">
                 <div class="logo-normal text-center">
                     <img src="assets/images/icone.png" width="70%" class="img-fluid" alt="">
                 </div>
                 <div class="logo-mini text-center">
                     <img src="assets/images/icone.png" width="70%" class="img-fluid" alt="">
                 </div>
             </div>
             <!--logo End-->

         </a>
         <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
             <i class="icon">
                 <svg class="icon-20" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                     <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                 </svg>
             </i>
         </div>
     </div>
     <div class="sidebar-body pt-0 data-scrollbar">
         <div class="sidebar-list">
             <!-- Sidebar Menu Start -->
             <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                 <li class="nav-item static-item">
                     <a class="nav-link static-item disabled text-start" href="#" tabindex="-1">
                         <span class="default-icon">Home</span>
                         <span class="mini-icon" data-bs-toggle="tooltip" title="Home" data-bs-placement="right">-</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link " aria-current="page" href="painel.php">
                         <i class="icon" data-bs-toggle="tooltip" title="Dashboard" data-bs-placement="right">
                             <svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>
                             </svg>
                         </i>
                         <span class="item-name">Dashboard</span>
                     </a>
                 </li>
                 <?php
                    if ($tipo_usuario == "Master" || $tipo_usuario == "Administrator") {

                        echo "
                 <!--- PGDAS -->
                 <li class='nav-item'>
                     <a class='nav-link ' aria-current='page' href='pgdas.php'>
                         <i class='icon' data-bs-toggle='tooltip' title='PGDAS' data-bs-placement='right'>
                             <svg width='20' class='icon-20' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                 <path opacity='0.4' d='M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z' fill='currentColor'></path>
                                 <path fill-rule='evenodd' clip-rule='evenodd' d='M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z' fill='currentColor'></path>
                             </svg>
                         </i>
                         <span class='item-name'>PGDAS</span>
                     </a>
                 </li><!--- RH -->
                 <!--- Clientes  -->
                 <li class='nav-item'>
                 <a class='nav-link ' aria-current='page' href='business.php'>
                     <i class='icon' data-bs-toggle='tooltip' title='PGDAS' data-bs-placement='right'>
                         <svg width='20' class='icon-20' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
                             <path opacity='0.4' d='M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z' fill='currentColor'></path>
                             <path fill-rule='evenodd' clip-rule='evenodd' d='M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z' fill='currentColor'></path>
                         </svg>
                     </i>
                     <span class='item-name'>Clientes</span>
                 </a>
             </li><!--- fim Clientes -->
                 <!--- Contabilidade  -->
                 <li class='nav-item'>
                     <a class='nav-link' data-bs-toggle='collapse' href='#sidebar-cont' role='button' aria-expanded='false' aria-controls='sidebar-user'>
                         <i class='icon' data-bs-toggle='tooltip' title='Users' data-bs-placement='right'>
                             <svg width='20' class='icon-20' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                 <path d='M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z' fill='currentColor'></path>
                                 <path opacity='0.4' d='M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z' fill='currentColor'></path>
                                 <path opacity='0.4' d='M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z' fill='currentColor'></path>
                                 <path d='M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z' fill='currentColor'></path>
                                 <path opacity='0.4' d='M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z' fill='currentColor'></path>
                                 <path d='M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z' fill='currentColor'></path>
                             </svg>
                         </i>
                         <span class='item-name'>Contabilidade</span>
                         <i class='right-icon'>
                             <svg xmlns='http://www.w3.org/2000/svg' width='18' class='icon-18' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                 <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 5l7 7-7 7' />
                             </svg>
                         </i>
                     </a>
                     <ul class='sub-nav collapse' id='sidebar-cont' data-bs-parent='#sidebar-menu'>

                         <li class='nav-item'>
                             <a class='nav-link ' href='prolabore.php'>
                                 <i class='icon'>
                                     <svg class='icon-10' width='10' viewBox='0 0 24 24' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                                         <g>
                                             <circle cx='12' cy='12' r='8' fill='currentColor'></circle>
                                         </g>
                                     </svg>
                                 </i>
                                 <i class='sidenav-mini-icon' data-bs-toggle='tooltip' title='Add User' data-bs-placement='right'> A
                                 </i>
                                 <span class='item-name'>Prólabore</span>
                             </a>
                         </li>
                         <li class='nav-item'>
                             <a class='nav-link ' href='financas.php'>
                                 <i class='icon'>
                                     <svg class='icon-10' width='10' viewBox='0 0 24 24' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                                         <g>
                                             <circle cx='12' cy='12' r='8' fill='currentColor'></circle>
                                         </g>
                                     </svg>
                                 </i>
                                 <i class='sidenav-mini-icon' data-bs-toggle='tooltip' title='Add User' data-bs-placement='right'> A
                                 </i>
                                 <span class='item-name'>Finanças</span>
                             </a>
                         </li>

                     </ul>
                 </li><!--- fim Contabilidade -->
                 <!--- RH -->
                 <li class='nav-item'>
                     <a class='nav-link' data-bs-toggle='collapse' href='#sidebar-rh' role='button' aria-expanded='false' aria-controls='sidebar-user'>
                         <i class='icon' data-bs-toggle='tooltip' title='Users' data-bs-placement='right'>
                             <svg width='20' class='icon-20' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                 <path d='M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z' fill='currentColor'></path>
                                 <path opacity='0.4' d='M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z' fill='currentColor'></path>
                                 <path opacity='0.4' d='M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z' fill='currentColor'></path>
                                 <path d='M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z' fill='currentColor'></path>
                                 <path opacity='0.4' d='M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z' fill='currentColor'></path>
                                 <path d='M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z' fill='currentColor'></path>
                             </svg>
                         </i>
                         <span class='item-name'>RH</span>
                         <i class='right-icon'>
                             <svg xmlns='http://www.w3.org/2000/svg' width='18' class='icon-18' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                 <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 5l7 7-7 7' />
                             </svg>
                         </i>
                     </a>
                     <ul class='sub-nav collapse' id='sidebar-rh' data-bs-parent='#sidebar-menu'>
                         <li class='nav-item'>
                             <a class='nav-link ' href='colaboradores.php'>
                                 <i class='icon'>
                                     <svg class='icon-10' width='10' viewBox='0 0 24 24' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                                         <g>
                                             <circle cx='12' cy='12' r='8' fill='currentColor'></circle>
                                         </g>
                                     </svg>
                                 </i>
                                 <i class='sidenav-mini-icon' data-bs-toggle='tooltip' title='Add User' data-bs-placement='right'> A
                                 </i>
                                 <span class='item-name'>Colaboradores</span>
                             </a>
                         </li>
                         <li class='nav-item'>
                             <a class='nav-link ' href='contratos.php'>
                                 <i class='icon'>
                                     <svg class='icon-10' width='10' viewBox='0 0 24 24' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                                         <g>
                                             <circle cx='12' cy='12' r='8' fill='currentColor'></circle>
                                         </g>
                                     </svg>
                                 </i>
                                 <i class='sidenav-mini-icon' data-bs-toggle='tooltip' title='User List' data-bs-placement='right'> U
                                 </i>
                                 <span class='item-name'>Contratos</span>
                             </a>
                         </li>
                         <li class='nav-item'>
                             <a class='nav-link ' href='cargos.php'>
                                 <i class='icon'>
                                     <svg class='icon-10' width='10' viewBox='0 0 24 24' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                                         <g>
                                             <circle cx='12' cy='12' r='8' fill='currentColor'></circle>
                                         </g>
                                     </svg>
                                 </i>
                                 <i class='sidenav-mini-icon' data-bs-toggle='tooltip' title='User List' data-bs-placement='right'> U
                                 </i>
                                 <span class='item-name'>VA / VR</span>
                             </a>
                         </li>
                         <li class='nav-item'>
                             <a class='nav-link ' href='cargos.php'>
                                 <i class='icon'>
                                     <svg class='icon-10' width='10' viewBox='0 0 24 24' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                                         <g>
                                             <circle cx='12' cy='12' r='8' fill='currentColor'></circle>
                                         </g>
                                     </svg>
                                 </i>
                                 <i class='sidenav-mini-icon' data-bs-toggle='tooltip' title='User List' data-bs-placement='right'> U
                                 </i>
                                 <span class='item-name'>Dispensa de funcionario</span>
                             </a>
                         </li>
                         <li class='nav-item'>
                             <a class='nav-link ' href='cargos.php'>
                                 <i class='icon'>
                                     <svg class='icon-10' width='10' viewBox='0 0 24 24' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                                         <g>
                                             <circle cx='12' cy='12' r='8' fill='currentColor'></circle>
                                         </g>
                                     </svg>
                                 </i>
                                 <i class='sidenav-mini-icon' data-bs-toggle='tooltip' title='User List' data-bs-placement='right'> U
                                 </i>
                                 <span class='item-name'>Pagamento de INSS</span>
                             </a>
                         </li>
                         <li class='nav-item'>
                             <a class='nav-link ' href='cargos.php'>
                                 <i class='icon'>
                                     <svg class='icon-10' width='10' viewBox='0 0 24 24' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                                         <g>
                                             <circle cx='12' cy='12' r='8' fill='currentColor'></circle>
                                         </g>
                                     </svg>
                                 </i>
                                 <i class='sidenav-mini-icon' data-bs-toggle='tooltip' title='User List' data-bs-placement='right'> U
                                 </i>
                                 <span class='item-name'>P.I.G / CNAE</span>
                             </a>
                         </li>
                         <li class='nav-item'>
                             <a class='nav-link ' href='cargos.php'>
                                 <i class='icon'>
                                     <svg class='icon-10' width='10' viewBox='0 0 24 24' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                                         <g>
                                             <circle cx='12' cy='12' r='8' fill='currentColor'></circle>
                                         </g>
                                     </svg>
                                 </i>
                                 <i class='sidenav-mini-icon' data-bs-toggle='tooltip' title='User List' data-bs-placement='right'> U
                                 </i>
                                 <span class='item-name'>Bancos convenlados</span>
                             </a>
                         </li>
                         <li class='nav-item'>
                             <a class='nav-link ' href='cargos.php'>
                                 <i class='icon'>
                                     <svg class='icon-10' width='10' viewBox='0 0 24 24' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                                         <g>
                                             <circle cx='12' cy='12' r='8' fill='currentColor'></circle>
                                         </g>
                                     </svg>
                                 </i>
                                 <i class='sidenav-mini-icon' data-bs-toggle='tooltip' title='User List' data-bs-placement='right'> U
                                 </i>
                                 <span class='item-name'>Reajuste sindical</span>
                             </a>
                         </li>
                     </ul>
                 </li><!--- fim RH -->
                 <!--- juridico -->
                 <li class='nav-item'>
                     <a class='nav-link' data-bs-toggle='collapse' href='#sidebar-juridico' role='button' aria-expanded='false' aria-controls='sidebar-user'>
                         <i class='icon' data-bs-toggle='tooltip' title='Users' data-bs-placement='right'>
                             <svg width='20' class='icon-20' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                 <path d='M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z' fill='currentColor'></path>
                                 <path opacity='0.4' d='M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z' fill='currentColor'></path>
                                 <path opacity='0.4' d='M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z' fill='currentColor'></path>
                                 <path d='M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z' fill='currentColor'></path>
                                 <path opacity='0.4' d='M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z' fill='currentColor'></path>
                                 <path d='M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z' fill='currentColor'></path>
                             </svg>
                         </i>
                         <span class='item-name'>Juridico</span>
                         <i class='right-icon'>
                             <svg xmlns='http://www.w3.org/2000/svg' width='18' class='icon-18' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                 <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 5l7 7-7 7' />
                             </svg>
                         </i>
                     </a>
                     <ul class='sub-nav collapse' id='sidebar-juridico' data-bs-parent='#sidebar-menu'>
                         <li class='nav-item'>
                             <a class='nav-link ' href='adicionar_usuario.php'>
                                 <i class='icon'>
                                     <svg class='icon-10' width='10' viewBox='0 0 24 24' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                                         <g>
                                             <circle cx='12' cy='12' r='8' fill='currentColor'></circle>
                                         </g>
                                     </svg>
                                 </i>
                                 <i class='sidenav-mini-icon' data-bs-toggle='tooltip' title='Add User' data-bs-placement='right'> A
                                 </i>
                                 <span class='item-name'>Negativação</span>
                             </a>
                         </li>
                         <li class='nav-item'>
                             <a class='nav-link ' href='lista_de_usuarios.php'>
                                 <i class='icon'>
                                     <svg class='icon-10' width='10' viewBox='0 0 24 24' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                                         <g>
                                             <circle cx='12' cy='12' r='8' fill='currentColor'></circle>
                                         </g>
                                     </svg>
                                 </i>
                                 <i class='sidenav-mini-icon' data-bs-toggle='tooltip' title='User List' data-bs-placement='right'> U
                                 </i>
                                 <span class='item-name'>Ajuizamento</span>
                             </a>
                         </li>
                     </ul>
                 </li>

                 

                 ";
                    } else {
                    }
                    ?>
                 <li class='nav-item'>
                     <a class='nav-link' href='email_marketingFun.php'>
                         <i class='icon' data-bs-toggle='tooltip' title='Users' data-bs-placement='right'>
                             <svg width='20' class='icon-20' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                 <path d='M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z' fill='currentColor'></path>
                                 <path opacity='0.4' d='M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z' fill='currentColor'></path>
                                 <path opacity='0.4' d='M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z' fill='currentColor'></path>
                                 <path d='M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z' fill='currentColor'></path>
                                 <path opacity='0.4' d='M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z' fill='currentColor'></path>
                                 <path d='M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z' fill='currentColor'></path>
                             </svg>
                         </i>
                         <span class='item-name'>Email Marketing</span>
                         <i class='right-icon'>
                             <svg xmlns='http://www.w3.org/2000/svg' width='18' class='icon-18' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                 <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 5l7 7-7 7' />
                             </svg>
                         </i>
                     </a>
                 </li>
                 <li class='nav-item'>
                     <a class='nav-link' href='convenios.php'>
                         <i class='icon' data-bs-toggle='tooltip' title='Users' data-bs-placement='right'>
                             <svg width='20' class='icon-20' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                 <path d='M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z' fill='currentColor'></path>
                                 <path opacity='0.4' d='M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z' fill='currentColor'></path>
                                 <path opacity='0.4' d='M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z' fill='currentColor'></path>
                                 <path d='M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z' fill='currentColor'></path>
                                 <path opacity='0.4' d='M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z' fill='currentColor'></path>
                                 <path d='M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z' fill='currentColor'></path>
                             </svg>
                         </i>
                         <span class='item-name'>Convenios</span>
                         <i class='right-icon'>
                             <svg xmlns='http://www.w3.org/2000/svg' width='18' class='icon-18' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                 <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 5l7 7-7 7' />
                             </svg>
                         </i>
                     </a>
                 </li>
                 <li class="nav-item static-item">
                     <a class="nav-link static-item disabled text-start" href="#" tabindex="-1">
                         <span class="default-icon">Conta</span>
                         <span class="mini-icon" data-bs-toggle="tooltip" title="Home" data-bs-placement="right">-</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link " aria-current="page" href="meu_perfil.php">
                         <i class="icon" data-bs-toggle="tooltip" title="Dashboard" data-bs-placement="right">
                             <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M11.997 15.1746C7.684 15.1746 4 15.8546 4 18.5746C4 21.2956 7.661 21.9996 11.997 21.9996C16.31 21.9996 19.994 21.3206 19.994 18.5996C19.994 15.8786 16.334 15.1746 11.997 15.1746Z" fill="currentColor"></path>
                                 <path opacity="0.4" d="M11.9971 12.5838C14.9351 12.5838 17.2891 10.2288 17.2891 7.29176C17.2891 4.35476 14.9351 1.99976 11.9971 1.99976C9.06008 1.99976 6.70508 4.35476 6.70508 7.29176C6.70508 10.2288 9.06008 12.5838 11.9971 12.5838Z" fill="currentColor"></path>
                             </svg>
                         </i>
                         <span class="item-name">Meu perfil</span>
                     </a>
                 </li>


             </ul>

             <!-- Sidebar Menu End -->
         </div>
     </div>
     <div class="sidebar-footer"></div>
 </aside>
<header class="header header-sticky p-0 mb-4">
        <div class="container-fluid border-bottom px-4">
          <button class="header-toggler" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()" style="margin-inline-start: -14px">
            <svg class="icon icon-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path fill="var(--ci-primary-color, currentcolor)" d="M80 96h352v32H80zm0 144h352v32H80zm0 144h352v32H80z" class="ci-primary" />
            </svg>
          </button>
        
          <ul class="header-nav">
            <li class="nav-item py-1">
              <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
            </li>
            <li class="nav-item dropdown">
              <button class="btn btn-link nav-link py-2 px-2 d-flex align-items-center" type="button" aria-expanded="false" data-coreui-toggle="dropdown">
                <svg class="icon icon-lg theme-icon-active" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="var(--ci-primary-color, currentcolor)" d="M256 16C123.452 16 16 123.452 16 256s107.452 240 240 240 240-107.452 240-240S388.548 16 256 16m-22 446.849a208.35 208.35 0 0 1-169.667-125.9c-.364-.859-.706-1.724-1.057-2.587L234 429.939Zm0-69.582L50.889 290.76A210 210 0 0 1 48 256q0-9.912.922-19.67L234 339.939Zm0-90L54.819 202.96a206 206 0 0 1 9.514-27.913Q67.1 168.5 70.3 162.191L234 253.934Zm0-86.015L86.914 134.819a209.4 209.4 0 0 1 22.008-25.9q3.72-3.72 7.6-7.228L234 166.027Zm0-87.708-89.648-49.093A206.95 206.95 0 0 1 234 49.151ZM464 256a207.775 207.775 0 0 1-198 207.761V48.239A207.79 207.79 0 0 1 464 256" class="ci-primary" />
                </svg>
              </button>
              <ul class="dropdown-menu dropdown-menu-end" style="--cui-dropdown-min-width: 8rem">
                <li>
                  <button class="dropdown-item d-flex align-items-center" type="button" data-coreui-theme-value="light">
                    <svg class="icon icon-lg me-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path fill="var(--ci-primary-color, currentcolor)" d="M256 104c-83.813 0-152 68.187-152 152s68.187 152 152 152 152-68.187 152-152-68.187-152-152-152m0 272a120 120 0 1 1 120-120 120.136 120.136 0 0 1-120 120M240 16h32v48h-32zm0 432h32v48h-32zm208-208h48v32h-48zm-432 0h48v32H16zm372.687 171.314 22.627-22.627 32 32-22.627 22.627zm-320-320 22.628-22.628 32 32-22.628 22.628zm-.002 329.375 32-32 22.628 22.626-32 32zm320.002-320.003 32-32 22.628 22.628-32 32z" class="ci-primary" />
                    </svg>
                    Light
                  </button>
                </li>
                <li>
                  <button class="dropdown-item d-flex align-items-center" type="button" data-coreui-theme-value="dark">
                    <svg class="icon icon-lg me-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path fill="var(--ci-primary-color, currentcolor)" d="M268.279 496c-67.574 0-130.978-26.191-178.534-73.745S16 311.293 16 243.718A252.25 252.25 0 0 1 154.183 18.676a24.44 24.44 0 0 1 34.46 28.958 220.12 220.12 0 0 0 54.8 220.923A218.75 218.75 0 0 0 399.085 333.2a220.2 220.2 0 0 0 65.277-9.846 24.439 24.439 0 0 1 28.959 34.461A252.26 252.26 0 0 1 268.279 496M153.31 55.781A219.3 219.3 0 0 0 48 243.718C48 365.181 146.816 464 268.279 464a219.3 219.3 0 0 0 187.938-105.31 253 253 0 0 1-57.13 6.513 250.54 250.54 0 0 1-178.268-74.016 252.15 252.15 0 0 1-67.509-235.4Z" class="ci-primary" />
                    </svg>
                    Dark
                  </button>
                </li>
                <li>
                  <button class="dropdown-item d-flex align-items-center active" type="button" data-coreui-theme-value="auto">
                    <svg class="icon icon-lg me-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path fill="var(--ci-primary-color, currentcolor)" d="M256 16C123.452 16 16 123.452 16 256s107.452 240 240 240 240-107.452 240-240S388.548 16 256 16m-22 446.849a208.35 208.35 0 0 1-169.667-125.9c-.364-.859-.706-1.724-1.057-2.587L234 429.939Zm0-69.582L50.889 290.76A210 210 0 0 1 48 256q0-9.912.922-19.67L234 339.939Zm0-90L54.819 202.96a206 206 0 0 1 9.514-27.913Q67.1 168.5 70.3 162.191L234 253.934Zm0-86.015L86.914 134.819a209.4 209.4 0 0 1 22.008-25.9q3.72-3.72 7.6-7.228L234 166.027Zm0-87.708-89.648-49.093A206.95 206.95 0 0 1 234 49.151ZM464 256a207.775 207.775 0 0 1-198 207.761V48.239A207.79 207.79 0 0 1 464 256" class="ci-primary" />
                    </svg>
                    Auto
                  </button>
                </li>
              </ul>
            </li>
           
            <li class="nav-item dropdown">
              <a class="nav-link py-0 pe-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg" alt="user@email.com"></div>
              </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold my-2">
                  <div class="fw-semibold">Settings</div>
                </div>
                <a class="dropdown-item" href="#">
                  <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="var(--ci-primary-color, currentcolor)" d="m411.6 343.656-72.823-47.334 27.455-50.334A80.2 80.2 0 0 0 376 207.681V128a112 112 0 0 0-224 0v79.681a80.24 80.24 0 0 0 9.768 38.308l27.455 50.333-72.823 47.334A79.72 79.72 0 0 0 80 410.732V496h368v-85.268a79.73 79.73 0 0 0-36.4-67.076M416 464H112v-53.268a47.84 47.84 0 0 1 21.841-40.246l97.66-63.479-41.64-76.341A48.15 48.15 0 0 1 184 207.681V128a80 80 0 0 1 160 0v79.681a48.15 48.15 0 0 1-5.861 22.985L296.5 307.007l97.662 63.479A47.84 47.84 0 0 1 416 410.732Z" class="ci-primary" />
                  </svg>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="var(--ci-primary-color, currentcolor)" d="M245.151 168a88 88 0 1 0 88 88 88.1 88.1 0 0 0-88-88m0 144a56 56 0 1 1 56-56 56.063 56.063 0 0 1-56 56" class="ci-primary" />
                    <path fill="var(--ci-primary-color, currentcolor)" d="m464.7 322.319-31.77-26.153a193.1 193.1 0 0 0 0-80.332l31.77-26.153a19.94 19.94 0 0 0 4.606-25.439l-32.612-56.483a19.936 19.936 0 0 0-24.337-8.73l-38.561 14.447a192 192 0 0 0-69.54-40.192l-6.766-40.571A19.936 19.936 0 0 0 277.762 16H212.54a19.94 19.94 0 0 0-19.728 16.712l-6.762 40.572a192 192 0 0 0-69.54 40.192L77.945 99.027a19.94 19.94 0 0 0-24.334 8.731L21 164.245a19.94 19.94 0 0 0 4.61 25.438l31.767 26.151a193.1 193.1 0 0 0 0 80.332l-31.77 26.153A19.94 19.94 0 0 0 21 347.758l32.612 56.483a19.94 19.94 0 0 0 24.337 8.73l38.562-14.447a192 192 0 0 0 69.54 40.192l6.762 40.571A19.94 19.94 0 0 0 212.54 496h65.222a19.936 19.936 0 0 0 19.728-16.712l6.763-40.572a192 192 0 0 0 69.54-40.192l38.564 14.449a19.94 19.94 0 0 0 24.334-8.731l32.609-56.487a19.94 19.94 0 0 0-4.6-25.436m-50.636 57.12-48.109-18.024-7.285 7.334a159.96 159.96 0 0 1-72.625 41.973l-10 2.636L267.6 464h-44.89l-8.442-50.642-10-2.636a159.96 159.96 0 0 1-72.625-41.973l-7.285-7.334-48.117 18.024L53.8 340.562l39.629-32.624-2.7-9.973a160.9 160.9 0 0 1 0-83.93l2.7-9.972L53.8 171.439l22.446-38.878 48.109 18.024 7.285-7.334a159.96 159.96 0 0 1 72.625-41.973l10-2.636L222.706 48H267.6l8.442 50.642 10 2.636a159.96 159.96 0 0 1 72.625 41.973l7.285 7.334 48.109-18.024 22.447 38.877-39.629 32.625 2.7 9.972a160.9 160.9 0 0 1 0 83.93l-2.7 9.973 39.629 32.623Z" class="ci-primary" />
                  </svg>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="var(--ci-primary-color, currentcolor)" d="M472 72H40a24.03 24.03 0 0 0-24 24v320a24.03 24.03 0 0 0 24 24h432a24.03 24.03 0 0 0 24-24V96a24.03 24.03 0 0 0-24-24m-8 32v64H48v-64ZM48 408V232h416v176Z" class="ci-primary" />
                    <path fill="var(--ci-primary-color, currentcolor)" d="M88 312h64v32H88zm96 0h64v32h-64z" class="ci-primary" />
                  </svg>
                  Payments
                </a>
                <a class="dropdown-item" href="#">
                  <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="var(--ci-primary-color, currentcolor)" d="M334.627 16H48v480h424V153.373ZM440 166.627V168H320V48h1.373ZM80 464V48h208v152h152v264Z" class="ci-primary" />
                  </svg>
                  Projects
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="var(--ci-primary-color, currentcolor)" d="M384 200v-56a128 128 0 0 0-256 0v56H88v128c0 92.635 75.364 168 168 168s168-75.365 168-168V200Zm-224-56a96 96 0 0 1 192 0v56H160Zm232 184c0 74.99-61.01 136-136 136s-136-61.01-136-136v-96h272Z" class="ci-primary" />
                  </svg>
                  Lock Account
                </a>
                <a class="dropdown-item" href="/authentication/login.html">
                  <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="var(--ci-primary-color, currentcolor)" d="M77.155 272.034H351.75v-32.001H77.155l75.053-75.053v-.001l-22.628-22.626-113.681 113.68.001.001h-.001L129.58 369.715l22.628-22.627v-.001z" class="ci-primary" />
                    <path fill="var(--ci-primary-color, currentcolor)" d="M160 16v32h304v416H160v32h336V16z" class="ci-primary" />
                  </svg>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
        <div class="container-fluid px-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><span>Dashboard</span></li>
            </ol>
          </nav>
        </div>
      </header>
<style>
     @media (min-width: 991.98px) {
          main {
               padding-left: 240px;
          }
     }

     /* Sidebar */
     .sidebar {
          position: fixed;
          top: 0;
          bottom: 0;
          left: 0;
          padding: 58px 0 0;
          /* Height of navbar */
          box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
          width: 240px;
          z-index: 600;
     }

     #sidebarMenu {
          background-color: color(srgb 0.0472 0.1883 0.2773);
     }

     .side-bar-link {
          color: white !important;
          text-decoration: none !important;
          text-transform: uppercase;
     }

     .side-bar-link-section,
     .admin-text {
          background-color: color(srgb 0.1294 0.2682 0.2997);
          padding: 10px 20px;
          margin: 5px 0px;
     }

     .side-bar-link-section:hover {
          border: 2px black;
          border-style: solid;
     }

     @media (max-width: 991.98px) {
          .sidebar {
               transform: translateX(-100%);
               transition: transform 0.3s ease;
               z-index: 601;
          }

          .sidebar.active {
               transform: translateX(0);
          }
     }
</style>

<nav id="main-navbar" class="navbar navbar-expand-lg navbar-white fixed-top">
     <div class="container-fluid">
          <button class="navbar-toggler text-white" type="button" id="sidebarToggle" aria-label="Toggle navigation"
               style="border: none;">
               <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
          </button>
     </div>
</nav>

<nav id="sidebarMenu" class="sidebar">
     <div class="position-sticky">
          <div class="list-group list-group-flush mx-3 mt-4">
               <ul class="navbar-nav">
                    <li class="admin-text"><a href="" class="side-bar-link">VRMMS | DASHBOARD</a></li>
                    <hr style="color: white; opacity: 1;">
                    <li class="side-bar-link-section"><a href="" class="side-bar-link">Dashboard</a></li>
                    <li class="side-bar-link-section"><a href="" class="side-bar-link">Services Offer</a></li>
                    <li class="side-bar-link-section"><a href="" class="side-bar-link">Mechanics</a></li>
                    <li class="side-bar-link-section"><a href="" class="side-bar-link">Registered Users</a></li>
                    <li class="side-bar-link-section"><a href="" class="side-bar-link">Message</a></li>
                    <li class="side-bar-link-section"><a href="" class="side-bar-link">Service Request</a></li>
                    <li class="side-bar-link-section"><a href="" class="side-bar-link">Service</a></li>
                    <li class="side-bar-link-section"><a href="" class="side-bar-link">Service Cost</a></li>
                    <li class="side-bar-link-section"><a href="" class="side-bar-link">Assign Mechanic</a></li>
                    <li class="side-bar-link-section"><a href="" class="side-bar-link">Service Details</a></li>
                    <li class="side-bar-link-section"><a href="" class="side-bar-link">Service History</a></li>
               </ul>
          </div>
     </div>
</nav>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script>
     $(document).ready(function () {
          // Toggle sidebar when the button is clicked
          $("#sidebarToggle").on("click", function () {
               $(".sidebar").toggleClass("active");
          });
     });
</script>
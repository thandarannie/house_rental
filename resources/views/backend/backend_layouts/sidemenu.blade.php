<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <h4>House Rental Mandalay</h4>
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
     <nav class="navbar-sidebar">
        <ul class="list-unstyled navbar__list">
            <li>
                <a class="js-arrow" href="/admin">
                 <i class="fas fa-home"></i>Home</a>
             </li>
             <li>
                <a href="{{route('rentlists.index')}}">
                    <i class="fas fa-list-ol"></i>Rents Lists</a>
                </li>
                <li>
                    <a href="{{route('ownerlists')}}">
                       <i class="fas fa-address-card"></i>Owner List
                   </a>
               </li>
               <li>
                <a href="{{route('housedetails.index')}}">
                    <i class="far fa-clipboard"></i>House Details</a>
                </li>
                <li>
                    <a href="/userposts">
                        <i class="fas fa-users"></i>User Posts</a>
                    </li>
                    <li>
                        <a href="/townshipdetails">
                            <i class="fas fa-map-marker-alt"></i>Townships Details</a>
                        </li>
                        <li>
                            <a href="/typedetails">
                              <i class="fas fa-th"></i>House Types
                          </a>
                      </li>
                      <li>
                        <a href="{{route('renthistory')}}">
                          <i class="fas fa-history"></i>Rent History
                      </a>
                  </li>
              </ul>
          </nav>
      </div>
  </aside>


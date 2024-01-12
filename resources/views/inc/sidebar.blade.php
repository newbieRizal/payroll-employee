<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
       <div id="sidebar-menu" class="sidebar-menu">
          <ul>
             @if(auth()->user()->hasRole('Employee'))
             <li class="{{ $page_name === 'Dasbor Karyawan' ? 'active' : '' }}">
               <a href="{{ route('home') }}"><i class="la la-dashboard"></i> <span>Dasbor</span></a>
             </li>
             @else
             <li class="{{ $page_name === 'Dasbor' ? 'active' : '' }}">
                <a href="{{ route('home') }}"><i class="la la-dashboard"></i> <span>Dasbor</span></a>
             </li>
             @endif
             @if(auth()->user()->hasRole('SuperAdmin') || auth()->user()->hasRole('Manager'))
             <li class="submenu">
               <a href="javascript:void(0);"><i class="la la-users"></i> </i> <span> Pengguna</span> <span class="menu-arrow"></span></a>
             <ul>
            @can('user-list')
             <li>
               <a href="{{ route('users.index') }}"   class="{{ $page_name === 'UserList' ? 'active' : ''}}"><span>Pengguna</span></a>
            </li>
            @endcan
            @can('user-create')
             <li>
               <a href="{{ route('users.create') }}" class="{{ $page_name === 'Create User' ? 'active' : ''}}"><span>Buat</span></a>
            </li>
            @endcan
             </ul>
             </li>
            @can('role-list')
            <li class="submenu">
               <a href="javascript:void(0);"><i class="las la-user-tag"></i><span> Kelola</span> <span class="menu-arrow"></span></a>
               <ul>
                  <li><a href="{{ route('roles.index') }}" class="{{ $page_name === 'RoleList' ? 'active' : '' }}">Pangkat</a></li>

                  @can('role-create')
                  <li><a href="{{ route('roles.create') }}" class="{{ $page_name === 'Create Role' ? 'active' : '' }}">Buat</a></li>
                  @endcan
               </ul>
            </li>
            @endcan
            @endif

         @can('worktype-list')
           <li class="submenu">
            <a href="javascript:void(0);"><i class="las la-briefcase"></i><span> Jenis Pekerjaan</span> <span class="menu-arrow"></span></a>
            <ul>
               <li><a href="{{ route('worktypes.index') }}" class="{{ $page_name === 'WorkTypeList' ? 'active' : '' }}">Jenis Pekerjaan</a></li>
               @can('worktype-create')
               <li><a href="{{ route('worktypes.create') }}" class="{{ $page_name === 'Create WorkType' ? 'active' : '' }}">Buat</a></li>
               @endcan
            </ul>
         </li>
         @endcan


         @if(auth()->user()->hasRole('Manager'))
         <li class="submenu">
            <a href="javascript:void(0);"><i class="las la-hands-helping"></i><span> Pelayanan</span> <span class="menu-arrow"></span></a>
            <ul>
               <li><a href="{{ route('cash.index') }}" class="
                  @if($page_name == 'AdvanceCashList' OR $page_name == 'AddAdvanceCash' OR $page_name == 'EditAdvanceCash')
                  active
                  @else
                  @endif
                  ">Uang Muka</a></li>
            </ul>
         </li>
         @endif
          </ul>
       </div>
    </div>
 </div>

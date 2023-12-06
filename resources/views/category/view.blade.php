<tbody class="fw-semibold text-gray-600">
    <tr>
        <td>
            <div class="form-check form-check-sm form-check-custom form-check-solid">
                <input class="form-check-input" type="checkbox" value="1" />
            </div>
        </td>
        <td class="text-end pe-0">
            <span class="fw-bold">{{$categories->name}}</span>
        </td>
        <td class="text-end pe-0">
            <span class="fw-bold">{{$categories->slug}}</span>
        </td>
        <td class="text-end pe-0">
            <!--begin::Badges-->
            <span class="fw-bold">{{$categories->description}}</span>
            <!--end::Badges-->
        </td>
        <td class="text-end ml-10">
            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                data-kt-menu-trigger="click">
                Actions
                <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="{{route('tag.show',$categories)}}" class="menu-link px-3">
                        View
                    </a>
                </div>
                <!--end::Menu item-->
                <div class="menu-item px-3">
                    <a href="{{route('tag.edit',$categories)}}" class="menu-link px-3">
                        Edit
                    </a>
                </div>

                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <form action="{{route('tag.destroy',$categories)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link menu-link px-3">
                            Delete
                        </button>
                    </form>
                </div>
                <!--end::Menu item-->
                <!--end::Menu item-->
            </div>
            <!--end::Menu-->
        </td>
    </tr>
</tbody>
<tr id="tag-{{$tag->id}}">
    <td>
        <input type="checkbox" class="form-check-input">
    </td>

    <td>{{$tag->name}}</td>
    <td>{{$tag->slug}}</td>
    <td>{{$tag->description}}</td>

    <td class="text-center">
        <div class="d-inline-flex">
            <div class="dropdown">
                <a href="#" class="text-body" data-bs-toggle="dropdown">
                    <i class="ph-list"></i>
                </a>

                <div class="dropdown-menu dropdown-menu-end">
                    <a href="{{route('tag.edit',$tag)}}" class="dropdown-item">
                        <i class="ph-pencil me-2"></i>
                        Edit file
                    </a>

                    <div class="dropdown-divider"></div>
                    <form action="{{route('tag.destroy',$tag)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="dropdown-item">
                            <i class="ph-trash me-2"></i>
                            Move to trash
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </td>

</tr>
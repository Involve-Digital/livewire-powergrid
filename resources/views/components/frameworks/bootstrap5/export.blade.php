<div>
    @if($exportOption)
        <div class="btn-group">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                         class="fill-current text-gray-400" viewBox="0 0 16 16">
                      <path
                          d="M5.884 6.68a.5.5 0 1 0-.768.64L7.349 10l-2.233 2.68a.5.5 0 0 0 .768.64L8 10.781l2.116 2.54a.5.5 0 0 0 .768-.641L8.651 10l2.233-2.68a.5.5 0 0 0-.768-.64L8 9.219l-2.116-2.54z"/>
                      <path
                          d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                    </svg>
                </span>
            </button>
            <ul class="dropdown-menu">
                @if(in_array('excel',$exportType))
                    <li><a class="dropdown-item" wire:click="exportToXLS()" href="#">Excel</a></li>
                @endif
                @if(in_array('csv',$exportType))
                    <li><a class="dropdown-item" wire:click="exportToCsv()" href="#">Csv</a></li>
                @endif
            </ul>
        </div>
    @endif
</div>
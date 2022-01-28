<div class="flex flex_column full_h p_8 overflow_hidden" style="min-width: 220px; max-width: 240px;">
    {{-- The whole world belongs to you. --}}
    <div>
        <div>
            @includeIf('livewire.components.atoms.btn-add-patient')
        </div>
        <div class="my_4">
            <input type="search" placeholder="Search Patient">
        </div>
        <div class="text_right">
            <select name="" id="" class="input_small" style="width: 50%;">
                <option value="Sort" selected hidden disabled>Sort</option>
                <option value="patient_firstname">Firstname</option>
                <option value="patient_lastname">Lastname</option>
                <option value="patient_lastname">Date Added</option>
            </select>
        </div>
    </div>

    <hr class="my_5">

    <div class="overflow_y full_h noscroll" style="">

        <ul class="selectable pointer">
            <li>First Patient</li>
            <li> Braden Patton</li>
            <li> Laiba Bateman</li>
            <li> Abul Potter</li>
            <li> Conna Denton</li>
            <li> Artur Rowe</li>
            <li> Lukas Vu</li>
            <li> Baran Zuniga</li>
            <li> Amir Hunter</li>
            <li> Tammy Logan</li>
            <li> Effie Hendricks</li>
            <li> Brady Patrick</li>
            <li> Viktoria Holmes</li>
            <li> Jeevan Wooten</li>
            <li> Alistair Sykes</li>
            <li> Gracie-Leigh Mohammed</li>
            <li> Lilianna Shaffer</li>
            <li> Bluebell Donaldson</li>
            <li> Ayisha Amos</li>
            <li> Tamara Wall</li>
            <li> Leopold Newman</li>
            <li>Last Patient</li>
        </ul>
    </div>
</div>

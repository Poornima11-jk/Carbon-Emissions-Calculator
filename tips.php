<?php

// Check carbon emission level
if ($total > 200) {

echo '
<div class="container mt-5">
<div class="card shadow p-4" style="border-radius:15px;">
<h3 class="text-danger text-center">⚠ High Carbon Emission</h3>

<ul class="list-group list-group-flush mt-3">
<li class="list-group-item">🚗 Reduce car usage and try public transport.</li>
<li class="list-group-item">💡 Switch off unused electrical appliances.</li>
<li class="list-group-item">🔌 Use energy-efficient devices.</li>
<li class="list-group-item">🌳 Plant more trees to offset carbon.</li>
<li class="list-group-item">♻️ Reduce waste and recycle materials.</li>
</ul>

</div>
</div>';

}

elseif ($total > 100) {

echo '
<div class="container mt-5">
<div class="card shadow p-4" style="border-radius:15px;">
<h3 class="text-warning text-center">⚡ Moderate Carbon Emission</h3>

<ul class="list-group list-group-flush mt-3">
<li class="list-group-item">🚲 Try walking or cycling for short trips.</li>
<li class="list-group-item">💡 Turn off lights when not needed.</li>
<li class="list-group-item">🚌 Use public transportation when possible.</li>
<li class="list-group-item">🌱 Support eco-friendly products.</li>
</ul>

</div>
</div>';

}

else {

echo '
<div class="container mt-5">
<div class="card shadow p-4" style="border-radius:15px;">
<h3 class="text-success text-center">✅ Low Carbon Emission</h3>

<ul class="list-group list-group-flush mt-3">
<li class="list-group-item">🌱 Great job! Your carbon footprint is low.</li>
<li class="list-group-item">🚲 Continue using eco-friendly transport.</li>
<li class="list-group-item">💡 Maintain energy-saving habits.</li>
<li class="list-group-item">🌳 Encourage others to reduce carbon footprint.</li>
</ul>

</div>
</div>';

}

?>
<div class="card h-100">
    <div class="card-body">
        <h5 class="card-title">
            {{ $title }}
        </h5>
        <h6 class="mb-3">
            <em>
                {{ $original_title }}
            </em>
        </h6>
        <p class="card-text mb-0">
            {{ $date }}
        </p>
        <p class="card-text mb-0">
            <strong>
                <small>
                    {{ $nationality }}
                </small>
            </strong>
        </p>
        <p class="card-text mb-0">
            <small>
                Vote: {{ $vote }}
            </small>
        </p>
    </div>
</div>
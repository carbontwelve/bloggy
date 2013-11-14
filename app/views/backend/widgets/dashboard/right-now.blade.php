<div class="col-lg-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Right Now</h3>
        </div>
        <div class="panel-body">

            <table class="table">
                <thead>
                <tr>
                    <th>Content</th>
                    <th>Discussion</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>### Posts</td>
                    <td class="text-primary">### Comments</td>
                </tr>
                <tr>
                    <td>### Pages</td>
                    <td class="text-success">### Approved</td>
                </tr>
                <tr>
                    <td>
                        <a href="#" title="Click to view your categories">
                            {{ $numberOfCategories }} Categories
                    </td>
                    <td class="text-warning">### Pending</td>
                </tr>
                <tr>
                    <td>
                        <a href="#" title="Click to view your tags">
                            {{ $numberOfTags }} Tags
                        </a>
                    </td>
                    <td class="text-danger"">### Spam</td>
                </tr>

                </tbody>
            </table>

        </div>
    </div>
</div>


<div class="form-group input-group">
    <label class="control-label" for="title">Title (required)</label>
    <input class="form-control" type="text" name="title" id="title" placeholder="Enter a Title" value="<?php echo $listing->getTitle(); ?>" required />
</div>
<div class="form-group input-group">
    <label class="control-label" for="type">Status</label>
    <select class="form-control" name="status" id="status" required>
        <?php
        foreach ($directory->getStatuses() as $status) {
            echo '<option value="' . $status . '"';
            if ($status == $listing->getStatus()) echo ' selected';
            echo '>' . ucwords($status) . '</option>';
        }
        ?>
    </select>
</div>
<div class="form-group input-group">
    <label class="control-label" for="description">Description</label>
    <!-- Display allowed html tags for use in the description --> 
    Allowed Tags: <?php echo ListingPremium::displayAllowedTags(); ?>
    <textarea class="form-control" name="description"  id="description">
    <?php 
        //check if listing is premium 
        if(is_a($listing, 'ListingPremium')){
            echo $listing->getDescription();
        }
    ?>
    </textarea>   
</div>
<div class="form-group input-group">
    <label class="control-label" for="description">Code Of Conduct (Featured Only) </label>
    <!-- Display allowed html tags for use in the code of conduct --> 
    Allowed Tags: <?php echo ListingPremium::displayAllowedTags(); ?>
    <textarea class="form-control" name="coc"  id="coc">
    <?php 
        //Check if listing is featured 
        if(is_a($listing, 'ListingFeatured')){
            echo $listing->getCoc();
        }
    ?>
    </textarea>   
</div>
<div class="form-group input-group">
    <label class="control-label" for="website">Website</label>
    <input class="form-control" type="text" name="website" id="website" placeholder="Enter a Website" value="<?php echo $listing->getWebsite(); ?>"  size="30" />
</div>
<div class="form-group input-group">
    <label class="control-label" for="email">Email</label>
    <input class="form-control" type="text" name="email" id="email" placeholder="Enter an Email" value="<?php echo $listing->getEmail(); ?>"  size="30" />
</div>
<div class="form-group input-group">
    <label class="control-label" for="twitter">Twitter</label>
    <input class="form-control" type="text" name="twitter" id="twitter" placeholder="Enter a Twitter" value="<?php echo $listing->getTwitter(); ?>"   size="30"/>
</div>
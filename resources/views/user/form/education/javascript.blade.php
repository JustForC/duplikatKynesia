<script>
    window.addEventListener('showAlert', event => {
        document.getElementById("alertSuccess").classList.remove('hidden');              
        document.getElementById("alertSuccess").classList.add('show');
    })

    // Event Training
    window.addEventListener('showDeleteTraining', event => {
        $("#deleteTraining").modal('show');
    })
    window.addEventListener('closeDeleteTraining', event => {
        $("#deleteTraining").modal('hide');
    })
    // End Event Training

    // Event Achievement
    window.addEventListener('showDeleteAchievement', event => {
        $("#deleteAchievement").modal('show');
    })
    window.addEventListener('closeDeleteAchievement', event => {
        $("#deleteAchievement").modal('hide');
    })
    // End Event Achivement

    // Event Language
    window.addEventListener('showDeleteLanguage', event => {
        $("#deleteLanguage").modal('show');
    })
    window.addEventListener('closeDeleteLanguage', event => {
        $("#deleteLanguage").modal('hide');
    })
    // End Event Language

    // Event Organization
    window.addEventListener('showDeleteOrganization', event => {
        $("#deleteOrganization").modal('show');
    })
    window.addEventListener('closeDeleteOrganization', event => {
        $("#deleteOrganization").modal('hide');
    })
    // End Event Organization

    // Event Talent
    window.addEventListener('showDeleteTalent', event => {
        $("#deleteTalent").modal('show');
    })
    window.addEventListener('closeDeleteTalent', event => {
        $("#deleteTalent").modal('hide');
    })
    // End Event Talent
</script>
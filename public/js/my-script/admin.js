// AJAX CSRF Token
$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

/*Toggle dropdown list*/
function toggleDD(myDropMenu) {
    document.getElementById(myDropMenu).classList.toggle("invisible");
}
// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches(".drop-button") &&
        !event.target.matches(".drop-search")
    ) {
        var dropdowns = document.getElementsByClassName("dropdownlist");
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (!openDropdown.classList.contains("invisible")) {
                openDropdown.classList.add("invisible");
            }
        }
    }
};

$(document).ready(function() {
    // File upload
    function readFile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var htmlPreview =
                    '<img width="200" src="' +
                    e.target.result +
                    '" />' +
                    "<p>" +
                    input.files[0].name +
                    "</p>";
                var wrapperZone = $(input).parent();
                var previewZone = $(input)
                    .parent()
                    .parent()
                    .find(".preview-zone");
                var boxZone = $(input)
                    .parent()
                    .parent()
                    .find(".preview-zone")
                    .find(".box")
                    .find(".box-body");

                wrapperZone.removeClass("dragover");
                previewZone.removeClass("hidden");
                boxZone.empty();
                boxZone.append(htmlPreview);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function reset(e) {
        e.wrap("<form>").closest("form").get(0).reset();
        e.unwrap();
    }

    $(".dropzone").change(function() {
        readFile(this);
    });

    $(".dropzone-wrapper").on("dragover", function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).addClass("dragover");
    });

    $(".dropzone-wrapper").on("dragleave", function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).removeClass("dragover");
    });

    $(".remove-preview").on("click", function() {
        var boxZone = $(this).parents(".preview-zone").find(".box-body");
        var previewZone = $(this).parents(".preview-zone");
        var dropzone = $(this).parents(".form-group").find(".dropzone");
        boxZone.empty();
        previewZone.addClass("hidden");
        reset(dropzone);
    });

    // Fetch data category to modal
    $(".btn-edit").on("click", function() {
        const categoryId = $(this).val();
        $.ajax({
            url: "/admin/categories/" + categoryId + "/edit",
            type: "GET",
            success: (response) => {
                $(".edit-form").attr(
                    "action",
                    "/admin/categories/" + response.id
                );
                $(".edit-category-name").val(response.category_name);
            },
        });
    });
});

// Status & Recommended post validation
const statusInput = document.getElementById("status");
const statusText = document.getElementById("status-text");

const recommendedInput = document.getElementById("recommended");
const recommendedText = document.getElementById("recommended-text");

statusInput.onclick = () => {
    if (statusInput.checked) {
        statusText.innerHTML = "Active";

        statusText.classList.add("text-green-500");
        statusText.classList.remove("text-red-500");
    } else {
        statusText.innerHTML = "Inactive";
        statusText.classList.add("text-red-500");
        statusText.classList.remove("text-green-500");
    }
};

recommendedInput.onclick = () => {
    if (recommendedInput.checked) {
        recommendedText.innerHTML = "Yes";

        recommendedText.classList.add("text-green-500");
        recommendedText.classList.remove("text-red-500");
    } else {
        recommendedText.innerHTML = "No";

        recommendedText.classList.add("text-red-500");
        recommendedText.classList.remove("text-green-500");
    }
};
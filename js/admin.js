
$("form[name='doLogin']").submit(function(e) {

        var base_url = $("#base_url").val();
        var formData = new FormData ($ (this) [0]);


        $.ajax({

            url: base_url+"Login/doLogin",
            type: "POST",
            data: formData,
            async: false,

            success: function (data) {

                 if(data==1000)  
                { 
                     window.location=base_url+"welcome";

                }

                else 
                {
                    alert('Please Check your credentials');
                }           
            },

            cache: false,
            contentType: false,
            processData: false
        });

        e.preventDefault();

    });

    function getSlugCat()
     {
          var base_url = $("#base_url").val();
          var product_name = $("#category_name").val();
          var datastring="product_name="+product_name;

          $.ajax({
               url: base_url+"Action_Controller/getSlug",
               data: datastring,
               type: "POST",
               success: function (data) {
               $('[name="slug"]').val(data);
               },
               error: function (jqXHR, textStatus, errorThrown)
               {
               alert('Error get data from ajax');
               }

          });
     }

     function deleteCategory(id)
     {    
          var base_url = $("#base_url").val();
          var conf = confirm("Are you sure you want to delete this");
          if(conf == true){
          var datastring="id="+id;

           $.ajax({
               url: base_url+"Action_Controller/deleteCategory/"+id,
               type: "POST",
               success: function (data)
               {

                    var obj = jQuery.parseJSON(data);
                    if(obj.status==true)

                    {
                         alert('Deleted Successfully');
                         location.reload();
                    }else{
                         alert("Try Again");
                    }
               }
          });
          }
     }

     function deleteSubCategory(id)

     {

          var base_url = $("#base_url").val();
          var conf = confirm("Are you sure you want to delete this");
          if(conf == true){
          var datastring="id="+id;


           $.ajax({
               url: base_url+"Action_Controller/deleteSubCategory/"+id,
               type: "POST",
               success: function (data)
               {

                    var obj = jQuery.parseJSON(data);
                    if(obj.status==true)

                    {
                         alert('Deleted Successfully');
                         location.reload();
                    }else{
                         alert("Try Again");
                    }
               }
          });
          }
     }

     function deleteSlider(id)

     {

          var base_url = $("#base_url").val();
          var conf = confirm("Are you sure you want to delete this");
          if(conf == true){
          var datastring="id="+id;


           $.ajax({
               url: base_url+"Action_Controller/deleteSlider/"+id,
               type: "POST",
               success: function (data)
               {

                    var obj = jQuery.parseJSON(data);
                    if(obj.status==true)

                    {
                         alert('Deleted Successfully');
                         location.reload();
                    }else{
                         alert("Try Again");
                    }
               }
          });
          }
     }

     function deleteProduct(id)

     {

          var base_url = $("#base_url").val();
          var conf = confirm("Are you sure you want to delete this");
          if(conf == true){
          var datastring="id="+id;


           $.ajax({
               url: base_url+"Action_Controller/deleteProduct/"+id,
               type: "POST",
               success: function (data)
               {

                    var obj = jQuery.parseJSON(data);
                    if(obj.status==true)

                    {
                         alert('Deleted Successfully');
                         location.reload();
                    }else{
                         alert("Try Again");
                    }
               }
          });
          }
     }
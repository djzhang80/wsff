e:
cd E:\modifyswat2
copy hw_model_in.txt model.in /Y
Swat_Edit.exe
swat2009.exe
GLUE_extract_rch.exe
copy model_rch.out hw_model_rch.out /Y
copy lw_model_in.txt model.in /Y
Swat_Edit.exe
swat2009.exe
GLUE_extract_rch.exe
copy model_rch.out lw_model_rch.out /Y
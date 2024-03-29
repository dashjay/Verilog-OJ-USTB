<?php

use Illuminate\Database\Seeder;

class ProblemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('problems')->delete();
        
        \DB::table('problems')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => '乘法器',
                'content' => '乘法器乘法器乘法器乘法器乘法器乘法器',
                'answer' => 'module top_module(
input [3:0] a,
input [3:0] b,
output reg[7:0] p
);

reg [7:0] pv;
reg [7:0] ap;
integer i;

always@(*)
begin
pv = 8\'b00000000;
ap = {4\'b0000,a};
for(i = 0; i<=3; i=i+1)
begin
if(b[i]==1)
pv = pv + ap;
ap = {ap[6:0],1\'b0};
end
p = pv;
end
endmodule',
                'template' => 'module top_module(
input [3:0] a,
input [3:0] b,
output reg[7:0] p
);

// write your code here
endmodule',
                'stimulation' => 'add wave a
add wave b
add wave p
force a 16#0x8
force b 16#0xa
run 1000
force b 16#0x2
run 1000
force b 16#0x3
run 1000
force b 16#0x4
run 1000
force b 16#0x5',
                'difficulty' => 'High',
                'total_solved' => 0,
                'total_submit' => 0,
                'tags' => '["乘法器"]',
                'wavedrom' => '{"signal": [{"data": ["8", "8", "8", "8", "8"], "name": "a", "wave": "=========="}, {"data": ["a", "a", "2", "3", "4"], "name": "b", "wave": "=========="}, {"data": ["xx", "50", "10", "18", "20"], "name": "p", "wave": "=========="}]}',
                'svg' => '<svg baseProfile="full" height="90" id="svgcontent_0" version="1.1" viewBox="0,0,480,90" width="480" xmlns="http://www.w3.org/2000/svg" xmlns:ev="http://www.w3.org/2001/xml-events" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><style type="text/css"><![CDATA[
text{font-size:11pt;
font-style:normal;
font-variant:normal;
font-weight:normal;
font-stretch:normal;
text-align:center;
fill-opacity:1;
font-family:Helvetica}
.muted{fill:#aaa}
.warning{fill:#f6b900}
.error{fill:#f60000}
.info{fill:#0041c4}
.success{fill:#00ab00}
.h1{font-size:33pt;font-weight:bold}
.h2{font-size:27pt;font-weight:bold}
.h3{font-size:20pt;font-weight:bold}
.h4{font-size:14pt;font-weight:bold}
.h5{font-size:11pt;font-weight:bold}
.h6{font-size:8pt;font-weight:bold}
.s1{fill:none;
stroke:#000;
stroke-width:1;
stroke-linecap:round;
stroke-linejoin:miter;
stroke-miterlimit:4;
stroke-opacity:1;
stroke-dasharray:none}
.s2{fill:none;
stroke:#000;
stroke-width:0.5;
stroke-linecap:round;
stroke-linejoin:miter;
stroke-miterlimit:4;
stroke-opacity:1;
stroke-dasharray:none}
.s3{color:#000;
fill:none;
stroke:#000;
stroke-width:1;
stroke-linecap:round;
stroke-linejoin:miter;
stroke-miterlimit:4;
stroke-opacity:1;
stroke-dasharray:1,3;
stroke-dashoffset:0;
marker:none;
visibility:visible;
display:inline;
overflow:visible;
enable-background:accumulate}
.s4{color:#000;
fill:none;
stroke:#000;
stroke-width:1;
stroke-linecap:round;
stroke-linejoin:miter;
stroke-miterlimit:4;
stroke-opacity:1;
stroke-dasharray:none;
stroke-dashoffset:0;
marker:none;
visibility:visible;
display:inline;
overflow:visible}
.s5{fill:#fff;stroke:none}
.s6{color:#000;
fill:#ffffb4;
fill-opacity:1;
fill-rule:nonzero;
stroke:none;
stroke-width:1px;
marker:none;
visibility:visible;
display:inline;
overflow:visible;
enable-background:accumulate}
.s7{color:#000;
fill:#ffe0b9;
fill-opacity:1;
fill-rule:nonzero;
stroke:none;
stroke-width:1px;
marker:none;
visibility:visible;
display:inline;
overflow:visible;
enable-background:accumulate}
.s8{color:#000;
fill:#b9e0ff;
fill-opacity:1;
fill-rule:nonzero;
stroke:none;
stroke-width:1px;
marker:none;
visibility:visible;
display:inline;
overflow:visible;
enable-background:accumulate}
.s9{fill:#000;
fill-opacity:1;
stroke:none}
.s10{color:#000;
fill:#fff;
fill-opacity:1;
fill-rule:nonzero;
stroke:none;
stroke-width:1px;
marker:none;
visibility:visible;
display:inline;
overflow:visible;
enable-background:accumulate}
.s11{fill:#0041c4;fill-opacity:1;stroke:none}
.s12{fill:none;
stroke:#0041c4;
stroke-width:1;
stroke-linecap:round;
stroke-linejoin:miter;
stroke-miterlimit:4;
stroke-opacity:1;
stroke-dasharray:none}
]]></style><g id="socket"><rect height="20" width="20" x="6" y="15" /></g><g id="pclk"><path class="s1" d="M0,20 0,0 20,0" /></g><g id="nclk"><path class="s1" d="m0,0 0,20 20,0" /></g><g id="000"><path class="s1" d="m0,20 20,0" /></g><g id="0m0"><path class="s1" d="m0,20 3,0 3,-10 3,10 11,0" /></g><g id="0m1"><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="0mx"><path class="s1" d="M3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 5,20" /><path class="s2" d="M20,0 4,16" /><path class="s2" d="M15,0 6,9" /><path class="s2" d="M10,0 9,1" /><path class="s1" d="m0,20 20,0" /></g><g id="0md"><path class="s3" d="m8,20 10,0" /><path class="s1" d="m0,20 5,0" /></g><g id="0mu"><path class="s1" d="m0,20 3,0 C 7,10 10.107603,0 20,0" /></g><g id="0mz"><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="111"><path class="s1" d="M0,0 20,0" /></g><g id="1m0"><path class="s1" d="m0,0 3,0 6,20 11,0" /></g><g id="1m1"><path class="s1" d="M0,0 3,0 6,10 9,0 20,0" /></g><g id="1mx"><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 6,9" /><path class="s2" d="M10,0 5,5" /><path class="s2" d="M3.5,1.5 5,0" /></g><g id="1md"><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /></g><g id="1mu"><path class="s1" d="M0,0 5,0" /><path class="s3" d="M8,0 18,0" /></g><g id="1mz"><path class="s1" d="m0,0 3,0 c 7,10 12,10 17,10" /></g><g id="xxx"><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /><path class="s2" d="M0,5 5,0" /><path class="s2" d="M0,10 10,0" /><path class="s2" d="M0,15 15,0" /><path class="s2" d="M0,20 20,0" /><path class="s2" d="M5,20 20,5" /><path class="s2" d="M10,20 20,10" /><path class="s2" d="m15,20 5,-5" /></g><g id="xm0"><path class="s1" d="M0,0 4,0 9,20" /><path class="s1" d="m0,20 20,0" /><path class="s2" d="M0,5 4,1" /><path class="s2" d="M0,10 5,5" /><path class="s2" d="M0,15 6,9" /><path class="s2" d="M0,20 7,13" /><path class="s2" d="M5,20 8,17" /></g><g id="xm1"><path class="s1" d="M0,0 20,0" /><path class="s1" d="M0,20 4,20 9,0" /><path class="s2" d="M0,5 5,0" /><path class="s2" d="M0,10 9,1" /><path class="s2" d="M0,15 7,8" /><path class="s2" d="M0,20 5,15" /></g><g id="xmx"><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /><path class="s2" d="M0,5 5,0" /><path class="s2" d="M0,10 10,0" /><path class="s2" d="M0,15 15,0" /><path class="s2" d="M0,20 20,0" /><path class="s2" d="M5,20 20,5" /><path class="s2" d="M10,20 20,10" /><path class="s2" d="m15,20 5,-5" /></g><g id="xmd"><path class="s1" d="m0,0 4,0 c 3,10 6,20 16,20" /><path class="s1" d="m0,20 20,0" /><path class="s2" d="M0,5 4,1" /><path class="s2" d="M0,10 5.5,4.5" /><path class="s2" d="M0,15 6.5,8.5" /><path class="s2" d="M0,20 8,12" /><path class="s2" d="m5,20 5,-5" /><path class="s2" d="m10,20 2.5,-2.5" /></g><g id="xmu"><path class="s1" d="M0,0 20,0" /><path class="s1" d="m0,20 4,0 C 7,10 10,0 20,0" /><path class="s2" d="M0,5 5,0" /><path class="s2" d="M0,10 10,0" /><path class="s2" d="M0,15 10,5" /><path class="s2" d="M0,20 6,14" /></g><g id="xmz"><path class="s1" d="m0,0 4,0 c 6,10 11,10 16,10" /><path class="s1" d="m0,20 4,0 C 10,10 15,10 20,10" /><path class="s2" d="M0,5 4.5,0.5" /><path class="s2" d="M0,10 6.5,3.5" /><path class="s2" d="M0,15 8.5,6.5" /><path class="s2" d="M0,20 11.5,8.5" /></g><g id="ddd"><path class="s3" d="m0,20 20,0" /></g><g id="dm0"><path class="s3" d="m0,20 10,0" /><path class="s1" d="m12,20 8,0" /></g><g id="dm1"><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="dmx"><path class="s1" d="M3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 5,20" /><path class="s2" d="M20,0 4,16" /><path class="s2" d="M15,0 6,9" /><path class="s2" d="M10,0 9,1" /><path class="s1" d="m0,20 20,0" /></g><g id="dmd"><path class="s3" d="m0,20 20,0" /></g><g id="dmu"><path class="s1" d="m0,20 3,0 C 7,10 10.107603,0 20,0" /></g><g id="dmz"><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="uuu"><path class="s3" d="M0,0 20,0" /></g><g id="um0"><path class="s1" d="m0,0 3,0 6,20 11,0" /></g><g id="um1"><path class="s3" d="M0,0 10,0" /><path class="s1" d="m12,0 8,0" /></g><g id="umx"><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 6,9" /><path class="s2" d="M10,0 5,5" /><path class="s2" d="M3.5,1.5 5,0" /></g><g id="umd"><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /></g><g id="umu"><path class="s3" d="M0,0 20,0" /></g><g id="umz"><path class="s4" d="m0,0 3,0 c 7,10 12,10 17,10" /></g><g id="zzz"><path class="s1" d="m0,10 20,0" /></g><g id="zm0"><path class="s1" d="m0,10 6,0 3,10 11,0" /></g><g id="zm1"><path class="s1" d="M0,10 6,10 9,0 20,0" /></g><g id="zmx"><path class="s1" d="m6,10 3,10 11,0" /><path class="s1" d="M0,10 6,10 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 6.5,8.5" /><path class="s2" d="M10,0 9,1" /></g><g id="zmd"><path class="s1" d="m0,10 7,0 c 3,5 8,10 13,10" /></g><g id="zmu"><path class="s1" d="m0,10 7,0 C 10,5 15,0 20,0" /></g><g id="zmz"><path class="s1" d="m0,10 20,0" /></g><g id="gap"><path class="s5" d="m7,-2 -4,0 c -5,0 -5,24 -10,24 l 4,0 C 2,22 2,-2 7,-2 z" /><path class="s1" d="M-7,22 C -2,22 -2,-2 3,-2" /><path class="s1" d="M-3,22 C 2,22 2,-2 7,-2" /></g><g id="0mv-3"><path class="s6" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="1mv-3"><path class="s6" d="M2.875,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="xmv-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s2" d="M0,5 3.5,1.5" /><path class="s2" d="M0,10 4.5,5.5" /><path class="s2" d="M0,15 6,9" /><path class="s2" d="M0,20 4,16" /></g><g id="dmv-3"><path class="s6" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="umv-3"><path class="s6" d="M3,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="zmv-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="m6,10 3,10 11,0" /><path class="s1" d="M0,10 6,10 9,0 20,0" /></g><g id="vvv-3"><path class="s6" d="M20,20 0,20 0,0 20,0" /><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vm0-3"><path class="s6" d="M0,20 0,0 3,0 9,20" /><path class="s1" d="M0,0 3,0 9,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vm1-3"><path class="s6" d="M0,0 0,20 3,20 9,0" /><path class="s1" d="M0,0 20,0" /><path class="s1" d="M0,20 3,20 9,0" /></g><g id="vmx-3"><path class="s6" d="M0,0 0,20 3,20 6,10 3,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 7,8" /><path class="s2" d="M10,0 9,1" /></g><g id="vmd-3"><path class="s6" d="m0,0 0,20 20,0 C 10,20 7,10 3,0" /><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vmu-3"><path class="s6" d="m0,0 0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="m0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vmz-3"><path class="s6" d="M0,0 3,0 C 10,10 15,10 20,10 15,10 10,10 3,20 L 0,20" /><path class="s1" d="m0,0 3,0 c 7,10 12,10 17,10" /><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="vmv-3-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s6" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-3-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s6" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-3-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s6" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-4-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s7" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-4-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s7" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-4-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s7" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-5-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s8" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-5-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s8" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-5-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s8" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="0mv-4"><path class="s7" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="1mv-4"><path class="s7" d="M2.875,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="xmv-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s2" d="M0,5 3.5,1.5" /><path class="s2" d="M0,10 4.5,5.5" /><path class="s2" d="M0,15 6,9" /><path class="s2" d="M0,20 4,16" /></g><g id="dmv-4"><path class="s7" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="umv-4"><path class="s7" d="M3,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="zmv-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="m6,10 3,10 11,0" /><path class="s1" d="M0,10 6,10 9,0 20,0" /></g><g id="0mv-5"><path class="s8" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="1mv-5"><path class="s8" d="M2.875,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="xmv-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s2" d="M0,5 3.5,1.5" /><path class="s2" d="M0,10 4.5,5.5" /><path class="s2" d="M0,15 6,9" /><path class="s2" d="M0,20 4,16" /></g><g id="dmv-5"><path class="s8" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="umv-5"><path class="s8" d="M3,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="zmv-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="m6,10 3,10 11,0" /><path class="s1" d="M0,10 6,10 9,0 20,0" /></g><g id="vvv-4"><path class="s7" d="M20,20 0,20 0,0 20,0" /><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vm0-4"><path class="s7" d="M0,20 0,0 3,0 9,20" /><path class="s1" d="M0,0 3,0 9,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vm1-4"><path class="s7" d="M0,0 0,20 3,20 9,0" /><path class="s1" d="M0,0 20,0" /><path class="s1" d="M0,20 3,20 9,0" /></g><g id="vmx-4"><path class="s7" d="M0,0 0,20 3,20 6,10 3,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 7,8" /><path class="s2" d="M10,0 9,1" /></g><g id="vmd-4"><path class="s7" d="m0,0 0,20 20,0 C 10,20 7,10 3,0" /><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vmu-4"><path class="s7" d="m0,0 0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="m0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vmz-4"><path class="s7" d="M0,0 3,0 C 10,10 15,10 20,10 15,10 10,10 3,20 L 0,20" /><path class="s1" d="m0,0 3,0 c 7,10 12,10 17,10" /><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="vvv-5"><path class="s8" d="M20,20 0,20 0,0 20,0" /><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vm0-5"><path class="s8" d="M0,20 0,0 3,0 9,20" /><path class="s1" d="M0,0 3,0 9,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vm1-5"><path class="s8" d="M0,0 0,20 3,20 9,0" /><path class="s1" d="M0,0 20,0" /><path class="s1" d="M0,20 3,20 9,0" /></g><g id="vmx-5"><path class="s8" d="M0,0 0,20 3,20 6,10 3,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 7,8" /><path class="s2" d="M10,0 9,1" /></g><g id="vmd-5"><path class="s8" d="m0,0 0,20 20,0 C 10,20 7,10 3,0" /><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vmu-5"><path class="s8" d="m0,0 0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="m0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vmz-5"><path class="s8" d="M0,0 3,0 C 10,10 15,10 20,10 15,10 10,10 3,20 L 0,20" /><path class="s1" d="m0,0 3,0 c 7,10 12,10 17,10" /><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="Pclk"><path class="s9" d="M-3,12 0,3 3,12 C 1,11 -1,11 -3,12 z" /><path class="s1" d="M0,20 0,0 20,0" /></g><g id="Nclk"><path class="s9" d="M-3,8 0,17 3,8 C 1,9 -1,9 -3,8 z" /><path class="s1" d="m0,0 0,20 20,0" /></g><g id="vvv-2"><path class="s10" d="M20,20 0,20 0,0 20,0" /><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vm0-2"><path class="s10" d="M0,20 0,0 3,0 9,20" /><path class="s1" d="M0,0 3,0 9,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vm1-2"><path class="s10" d="M0,0 0,20 3,20 9,0" /><path class="s1" d="M0,0 20,0" /><path class="s1" d="M0,20 3,20 9,0" /></g><g id="vmx-2"><path class="s10" d="M0,0 0,20 3,20 6,10 3,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 7,8" /><path class="s2" d="M10,0 9,1" /></g><g id="vmd-2"><path class="s10" d="m0,0 0,20 20,0 C 10,20 7,10 3,0" /><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vmu-2"><path class="s10" d="m0,0 0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="m0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vmz-2"><path class="s10" d="M0,0 3,0 C 10,10 15,10 20,10 15,10 10,10 3,20 L 0,20" /><path class="s1" d="m0,0 3,0 c 7,10 12,10 17,10" /><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="0mv-2"><path class="s10" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="1mv-2"><path class="s10" d="M2.875,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="xmv-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s2" d="M0,5 3.5,1.5" /><path class="s2" d="M0,10 4.5,5.5" /><path class="s2" d="M0,15 6,9" /><path class="s2" d="M0,20 4,16" /></g><g id="dmv-2"><path class="s10" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="umv-2"><path class="s10" d="M3,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="zmv-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="m6,10 3,10 11,0" /><path class="s1" d="M0,10 6,10 9,0 20,0" /></g><g id="vmv-3-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s6" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-4-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s7" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-5-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s8" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-2-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s10" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-2-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s10" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-2-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s10" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-2-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s10" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="arrow0"><path class="s11" d="m-12,-3 9,3 -9,3 c 1,-2 1,-4 0,-6 z" /><path class="s12" d="M0,0 -15,0" /></g><marker id="arrowhead" markerHeight="7" markerUnits="strokeWidth" markerWidth="10" orient="auto" refX="15" refY="0" style="fill:#0041c4" viewBox="0 -4 11 8"><path d="M0 -4 11 0 0 4z" /></marker><marker id="arrowtail" markerHeight="7" markerUnits="strokeWidth" markerWidth="10" orient="auto" refX="-15" refY="0" style="fill:#0041c4" viewBox="-11 -4 11 8"><path d="M0 -4 -11 0 0 4z" /></marker></defs><g id="waves_0"><g id="lanes_0" transform="translate(60.5,0.0)"><g id="wavelane_0_0" transform="translate(0,5)"><text class="info" text-anchor="end" x="-10" xml:space="preserve" y="15"><tspan>a</tspan></text><g id="wavelane_draw_0_0" transform="translate(0,0)"><use transform="translate(0)" xlink:href="#vvv-2" /><use transform="translate(20)" xlink:href="#vvv-2" /><use transform="translate(40)" xlink:href="#vmv-2-2" /><use transform="translate(60)" xlink:href="#vvv-2" /><use transform="translate(80)" xlink:href="#vmv-2-2" /><use transform="translate(100)" xlink:href="#vvv-2" /><use transform="translate(120)" xlink:href="#vmv-2-2" /><use transform="translate(140)" xlink:href="#vvv-2" /><use transform="translate(160)" xlink:href="#vmv-2-2" /><use transform="translate(180)" xlink:href="#vvv-2" /><use transform="translate(200)" xlink:href="#vmv-2-2" /><use transform="translate(220)" xlink:href="#vvv-2" /><use transform="translate(240)" xlink:href="#vmv-2-2" /><use transform="translate(260)" xlink:href="#vvv-2" /><use transform="translate(280)" xlink:href="#vmv-2-2" /><use transform="translate(300)" xlink:href="#vvv-2" /><use transform="translate(320)" xlink:href="#vmv-2-2" /><use transform="translate(340)" xlink:href="#vvv-2" /><use transform="translate(360)" xlink:href="#vmv-2-2" /><use transform="translate(380)" xlink:href="#vvv-2" /><text text-anchor="middle" x="6" xml:space="preserve" y="15"><tspan>8</tspan></text><text text-anchor="middle" x="66" xml:space="preserve" y="15"><tspan>8</tspan></text><text text-anchor="middle" x="106" xml:space="preserve" y="15"><tspan>8</tspan></text><text text-anchor="middle" x="146" xml:space="preserve" y="15"><tspan>8</tspan></text><text text-anchor="middle" x="186" xml:space="preserve" y="15"><tspan>8</tspan></text></g></g><g id="wavelane_1_0" transform="translate(0,35)"><text class="info" text-anchor="end" x="-10" xml:space="preserve" y="15"><tspan>b</tspan></text><g id="wavelane_draw_1_0" transform="translate(0,0)"><use transform="translate(0)" xlink:href="#vvv-2" /><use transform="translate(20)" xlink:href="#vvv-2" /><use transform="translate(40)" xlink:href="#vmv-2-2" /><use transform="translate(60)" xlink:href="#vvv-2" /><use transform="translate(80)" xlink:href="#vmv-2-2" /><use transform="translate(100)" xlink:href="#vvv-2" /><use transform="translate(120)" xlink:href="#vmv-2-2" /><use transform="translate(140)" xlink:href="#vvv-2" /><use transform="translate(160)" xlink:href="#vmv-2-2" /><use transform="translate(180)" xlink:href="#vvv-2" /><use transform="translate(200)" xlink:href="#vmv-2-2" /><use transform="translate(220)" xlink:href="#vvv-2" /><use transform="translate(240)" xlink:href="#vmv-2-2" /><use transform="translate(260)" xlink:href="#vvv-2" /><use transform="translate(280)" xlink:href="#vmv-2-2" /><use transform="translate(300)" xlink:href="#vvv-2" /><use transform="translate(320)" xlink:href="#vmv-2-2" /><use transform="translate(340)" xlink:href="#vvv-2" /><use transform="translate(360)" xlink:href="#vmv-2-2" /><use transform="translate(380)" xlink:href="#vvv-2" /><text text-anchor="middle" x="6" xml:space="preserve" y="15"><tspan>a</tspan></text><text text-anchor="middle" x="66" xml:space="preserve" y="15"><tspan>a</tspan></text><text text-anchor="middle" x="106" xml:space="preserve" y="15"><tspan>2</tspan></text><text text-anchor="middle" x="146" xml:space="preserve" y="15"><tspan>3</tspan></text><text text-anchor="middle" x="186" xml:space="preserve" y="15"><tspan>4</tspan></text></g></g><g id="wavelane_2_0" transform="translate(0,65)"><text class="info" text-anchor="end" x="-10" xml:space="preserve" y="15"><tspan>p</tspan></text><g id="wavelane_draw_2_0" transform="translate(0,0)"><use transform="translate(0)" xlink:href="#vvv-2" /><use transform="translate(20)" xlink:href="#vvv-2" /><use transform="translate(40)" xlink:href="#vmv-2-2" /><use transform="translate(60)" xlink:href="#vvv-2" /><use transform="translate(80)" xlink:href="#vmv-2-2" /><use transform="translate(100)" xlink:href="#vvv-2" /><use transform="translate(120)" xlink:href="#vmv-2-2" /><use transform="translate(140)" xlink:href="#vvv-2" /><use transform="translate(160)" xlink:href="#vmv-2-2" /><use transform="translate(180)" xlink:href="#vvv-2" /><use transform="translate(200)" xlink:href="#vmv-2-2" /><use transform="translate(220)" xlink:href="#vvv-2" /><use transform="translate(240)" xlink:href="#vmv-2-2" /><use transform="translate(260)" xlink:href="#vvv-2" /><use transform="translate(280)" xlink:href="#vmv-2-2" /><use transform="translate(300)" xlink:href="#vvv-2" /><use transform="translate(320)" xlink:href="#vmv-2-2" /><use transform="translate(340)" xlink:href="#vvv-2" /><use transform="translate(360)" xlink:href="#vmv-2-2" /><use transform="translate(380)" xlink:href="#vvv-2" /><text text-anchor="middle" x="6" xml:space="preserve" y="15"><tspan>xx</tspan></text><text text-anchor="middle" x="66" xml:space="preserve" y="15"><tspan>50</tspan></text><text text-anchor="middle" x="106" xml:space="preserve" y="15"><tspan>10</tspan></text><text text-anchor="middle" x="146" xml:space="preserve" y="15"><tspan>18</tspan></text><text text-anchor="middle" x="186" xml:space="preserve" y="15"><tspan>20</tspan></text></g></g><g id="gmarks_0"><path d="m 0,0 0,90" id="gmark_0_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 40,0 0,90" id="gmark_1_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 80,0 0,90" id="gmark_2_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 120,0 0,90" id="gmark_3_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 160,0 0,90" id="gmark_4_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 200,0 0,90" id="gmark_5_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 240,0 0,90" id="gmark_6_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 280,0 0,90" id="gmark_7_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 320,0 0,90" id="gmark_8_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 360,0 0,90" id="gmark_9_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 400,0 0,90" id="gmark_10_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /></g><g id="wavegaps_0"><g id="wavegap_0_0" transform="translate(0,5)" /><g id="wavegap_1_0" transform="translate(0,35)" /><g id="wavegap_2_0" transform="translate(0,65)" /></g><g id="labels_0"><g id="labels_0_0" transform="translate(0,5)" /><g id="labels_1_0" transform="translate(0,35)" /><g id="labels_2_0" transform="translate(0,65)" /></g><g id="wavearcs_0" /></g><g id="groups_0" /></g></svg>',
                'complete' => 1,
                'created_at' => '2019-09-06 02:12:51',
                'updated_at' => '2019-09-06 02:13:20',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => '【入门】赋值',
                'content' => '欢迎来到数字逻辑二进制的世界


Module Declaration:

module top_module(output one);',
            'answer' => 'module top_module(output one);

assign one = 1;

endmodule',
            'template' => 'module top_module(output one);

assign one = [fix me];

endmodule',
                'stimulation' => 'add wave one
run 10
run 10
run 10
run 10',
                'difficulty' => 'Low',
                'total_solved' => 0,
                'total_submit' => 0,
                'tags' => '["入门", "赋值"]',
                'wavedrom' => '{"signal": [{"data": ["x", "1"], "name": "one", "wave": "=========="}]}',
                'svg' => '<svg baseProfile="full" height="30" id="svgcontent_0" version="1.1" viewBox="0,0,500,30" width="500" xmlns="http://www.w3.org/2000/svg" xmlns:ev="http://www.w3.org/2001/xml-events" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><style type="text/css"><![CDATA[
text{font-size:11pt;
font-style:normal;
font-variant:normal;
font-weight:normal;
font-stretch:normal;
text-align:center;
fill-opacity:1;
font-family:Helvetica}
.muted{fill:#aaa}
.warning{fill:#f6b900}
.error{fill:#f60000}
.info{fill:#0041c4}
.success{fill:#00ab00}
.h1{font-size:33pt;font-weight:bold}
.h2{font-size:27pt;font-weight:bold}
.h3{font-size:20pt;font-weight:bold}
.h4{font-size:14pt;font-weight:bold}
.h5{font-size:11pt;font-weight:bold}
.h6{font-size:8pt;font-weight:bold}
.s1{fill:none;
stroke:#000;
stroke-width:1;
stroke-linecap:round;
stroke-linejoin:miter;
stroke-miterlimit:4;
stroke-opacity:1;
stroke-dasharray:none}
.s2{fill:none;
stroke:#000;
stroke-width:0.5;
stroke-linecap:round;
stroke-linejoin:miter;
stroke-miterlimit:4;
stroke-opacity:1;
stroke-dasharray:none}
.s3{color:#000;
fill:none;
stroke:#000;
stroke-width:1;
stroke-linecap:round;
stroke-linejoin:miter;
stroke-miterlimit:4;
stroke-opacity:1;
stroke-dasharray:1,3;
stroke-dashoffset:0;
marker:none;
visibility:visible;
display:inline;
overflow:visible;
enable-background:accumulate}
.s4{color:#000;
fill:none;
stroke:#000;
stroke-width:1;
stroke-linecap:round;
stroke-linejoin:miter;
stroke-miterlimit:4;
stroke-opacity:1;
stroke-dasharray:none;
stroke-dashoffset:0;
marker:none;
visibility:visible;
display:inline;
overflow:visible}
.s5{fill:#fff;stroke:none}
.s6{color:#000;
fill:#ffffb4;
fill-opacity:1;
fill-rule:nonzero;
stroke:none;
stroke-width:1px;
marker:none;
visibility:visible;
display:inline;
overflow:visible;
enable-background:accumulate}
.s7{color:#000;
fill:#ffe0b9;
fill-opacity:1;
fill-rule:nonzero;
stroke:none;
stroke-width:1px;
marker:none;
visibility:visible;
display:inline;
overflow:visible;
enable-background:accumulate}
.s8{color:#000;
fill:#b9e0ff;
fill-opacity:1;
fill-rule:nonzero;
stroke:none;
stroke-width:1px;
marker:none;
visibility:visible;
display:inline;
overflow:visible;
enable-background:accumulate}
.s9{fill:#000;
fill-opacity:1;
stroke:none}
.s10{color:#000;
fill:#fff;
fill-opacity:1;
fill-rule:nonzero;
stroke:none;
stroke-width:1px;
marker:none;
visibility:visible;
display:inline;
overflow:visible;
enable-background:accumulate}
.s11{fill:#0041c4;fill-opacity:1;stroke:none}
.s12{fill:none;
stroke:#0041c4;
stroke-width:1;
stroke-linecap:round;
stroke-linejoin:miter;
stroke-miterlimit:4;
stroke-opacity:1;
stroke-dasharray:none}
]]></style><g id="socket"><rect height="20" width="20" x="6" y="15" /></g><g id="pclk"><path class="s1" d="M0,20 0,0 20,0" /></g><g id="nclk"><path class="s1" d="m0,0 0,20 20,0" /></g><g id="000"><path class="s1" d="m0,20 20,0" /></g><g id="0m0"><path class="s1" d="m0,20 3,0 3,-10 3,10 11,0" /></g><g id="0m1"><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="0mx"><path class="s1" d="M3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 5,20" /><path class="s2" d="M20,0 4,16" /><path class="s2" d="M15,0 6,9" /><path class="s2" d="M10,0 9,1" /><path class="s1" d="m0,20 20,0" /></g><g id="0md"><path class="s3" d="m8,20 10,0" /><path class="s1" d="m0,20 5,0" /></g><g id="0mu"><path class="s1" d="m0,20 3,0 C 7,10 10.107603,0 20,0" /></g><g id="0mz"><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="111"><path class="s1" d="M0,0 20,0" /></g><g id="1m0"><path class="s1" d="m0,0 3,0 6,20 11,0" /></g><g id="1m1"><path class="s1" d="M0,0 3,0 6,10 9,0 20,0" /></g><g id="1mx"><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 6,9" /><path class="s2" d="M10,0 5,5" /><path class="s2" d="M3.5,1.5 5,0" /></g><g id="1md"><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /></g><g id="1mu"><path class="s1" d="M0,0 5,0" /><path class="s3" d="M8,0 18,0" /></g><g id="1mz"><path class="s1" d="m0,0 3,0 c 7,10 12,10 17,10" /></g><g id="xxx"><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /><path class="s2" d="M0,5 5,0" /><path class="s2" d="M0,10 10,0" /><path class="s2" d="M0,15 15,0" /><path class="s2" d="M0,20 20,0" /><path class="s2" d="M5,20 20,5" /><path class="s2" d="M10,20 20,10" /><path class="s2" d="m15,20 5,-5" /></g><g id="xm0"><path class="s1" d="M0,0 4,0 9,20" /><path class="s1" d="m0,20 20,0" /><path class="s2" d="M0,5 4,1" /><path class="s2" d="M0,10 5,5" /><path class="s2" d="M0,15 6,9" /><path class="s2" d="M0,20 7,13" /><path class="s2" d="M5,20 8,17" /></g><g id="xm1"><path class="s1" d="M0,0 20,0" /><path class="s1" d="M0,20 4,20 9,0" /><path class="s2" d="M0,5 5,0" /><path class="s2" d="M0,10 9,1" /><path class="s2" d="M0,15 7,8" /><path class="s2" d="M0,20 5,15" /></g><g id="xmx"><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /><path class="s2" d="M0,5 5,0" /><path class="s2" d="M0,10 10,0" /><path class="s2" d="M0,15 15,0" /><path class="s2" d="M0,20 20,0" /><path class="s2" d="M5,20 20,5" /><path class="s2" d="M10,20 20,10" /><path class="s2" d="m15,20 5,-5" /></g><g id="xmd"><path class="s1" d="m0,0 4,0 c 3,10 6,20 16,20" /><path class="s1" d="m0,20 20,0" /><path class="s2" d="M0,5 4,1" /><path class="s2" d="M0,10 5.5,4.5" /><path class="s2" d="M0,15 6.5,8.5" /><path class="s2" d="M0,20 8,12" /><path class="s2" d="m5,20 5,-5" /><path class="s2" d="m10,20 2.5,-2.5" /></g><g id="xmu"><path class="s1" d="M0,0 20,0" /><path class="s1" d="m0,20 4,0 C 7,10 10,0 20,0" /><path class="s2" d="M0,5 5,0" /><path class="s2" d="M0,10 10,0" /><path class="s2" d="M0,15 10,5" /><path class="s2" d="M0,20 6,14" /></g><g id="xmz"><path class="s1" d="m0,0 4,0 c 6,10 11,10 16,10" /><path class="s1" d="m0,20 4,0 C 10,10 15,10 20,10" /><path class="s2" d="M0,5 4.5,0.5" /><path class="s2" d="M0,10 6.5,3.5" /><path class="s2" d="M0,15 8.5,6.5" /><path class="s2" d="M0,20 11.5,8.5" /></g><g id="ddd"><path class="s3" d="m0,20 20,0" /></g><g id="dm0"><path class="s3" d="m0,20 10,0" /><path class="s1" d="m12,20 8,0" /></g><g id="dm1"><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="dmx"><path class="s1" d="M3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 5,20" /><path class="s2" d="M20,0 4,16" /><path class="s2" d="M15,0 6,9" /><path class="s2" d="M10,0 9,1" /><path class="s1" d="m0,20 20,0" /></g><g id="dmd"><path class="s3" d="m0,20 20,0" /></g><g id="dmu"><path class="s1" d="m0,20 3,0 C 7,10 10.107603,0 20,0" /></g><g id="dmz"><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="uuu"><path class="s3" d="M0,0 20,0" /></g><g id="um0"><path class="s1" d="m0,0 3,0 6,20 11,0" /></g><g id="um1"><path class="s3" d="M0,0 10,0" /><path class="s1" d="m12,0 8,0" /></g><g id="umx"><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 6,9" /><path class="s2" d="M10,0 5,5" /><path class="s2" d="M3.5,1.5 5,0" /></g><g id="umd"><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /></g><g id="umu"><path class="s3" d="M0,0 20,0" /></g><g id="umz"><path class="s4" d="m0,0 3,0 c 7,10 12,10 17,10" /></g><g id="zzz"><path class="s1" d="m0,10 20,0" /></g><g id="zm0"><path class="s1" d="m0,10 6,0 3,10 11,0" /></g><g id="zm1"><path class="s1" d="M0,10 6,10 9,0 20,0" /></g><g id="zmx"><path class="s1" d="m6,10 3,10 11,0" /><path class="s1" d="M0,10 6,10 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 6.5,8.5" /><path class="s2" d="M10,0 9,1" /></g><g id="zmd"><path class="s1" d="m0,10 7,0 c 3,5 8,10 13,10" /></g><g id="zmu"><path class="s1" d="m0,10 7,0 C 10,5 15,0 20,0" /></g><g id="zmz"><path class="s1" d="m0,10 20,0" /></g><g id="gap"><path class="s5" d="m7,-2 -4,0 c -5,0 -5,24 -10,24 l 4,0 C 2,22 2,-2 7,-2 z" /><path class="s1" d="M-7,22 C -2,22 -2,-2 3,-2" /><path class="s1" d="M-3,22 C 2,22 2,-2 7,-2" /></g><g id="0mv-3"><path class="s6" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="1mv-3"><path class="s6" d="M2.875,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="xmv-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s2" d="M0,5 3.5,1.5" /><path class="s2" d="M0,10 4.5,5.5" /><path class="s2" d="M0,15 6,9" /><path class="s2" d="M0,20 4,16" /></g><g id="dmv-3"><path class="s6" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="umv-3"><path class="s6" d="M3,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="zmv-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="m6,10 3,10 11,0" /><path class="s1" d="M0,10 6,10 9,0 20,0" /></g><g id="vvv-3"><path class="s6" d="M20,20 0,20 0,0 20,0" /><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vm0-3"><path class="s6" d="M0,20 0,0 3,0 9,20" /><path class="s1" d="M0,0 3,0 9,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vm1-3"><path class="s6" d="M0,0 0,20 3,20 9,0" /><path class="s1" d="M0,0 20,0" /><path class="s1" d="M0,20 3,20 9,0" /></g><g id="vmx-3"><path class="s6" d="M0,0 0,20 3,20 6,10 3,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 7,8" /><path class="s2" d="M10,0 9,1" /></g><g id="vmd-3"><path class="s6" d="m0,0 0,20 20,0 C 10,20 7,10 3,0" /><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vmu-3"><path class="s6" d="m0,0 0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="m0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vmz-3"><path class="s6" d="M0,0 3,0 C 10,10 15,10 20,10 15,10 10,10 3,20 L 0,20" /><path class="s1" d="m0,0 3,0 c 7,10 12,10 17,10" /><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="vmv-3-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s6" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-3-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s6" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-3-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s6" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-4-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s7" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-4-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s7" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-4-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s7" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-5-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s8" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-5-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s8" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-5-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s8" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="0mv-4"><path class="s7" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="1mv-4"><path class="s7" d="M2.875,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="xmv-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s2" d="M0,5 3.5,1.5" /><path class="s2" d="M0,10 4.5,5.5" /><path class="s2" d="M0,15 6,9" /><path class="s2" d="M0,20 4,16" /></g><g id="dmv-4"><path class="s7" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="umv-4"><path class="s7" d="M3,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="zmv-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="m6,10 3,10 11,0" /><path class="s1" d="M0,10 6,10 9,0 20,0" /></g><g id="0mv-5"><path class="s8" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="1mv-5"><path class="s8" d="M2.875,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="xmv-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s2" d="M0,5 3.5,1.5" /><path class="s2" d="M0,10 4.5,5.5" /><path class="s2" d="M0,15 6,9" /><path class="s2" d="M0,20 4,16" /></g><g id="dmv-5"><path class="s8" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="umv-5"><path class="s8" d="M3,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="zmv-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="m6,10 3,10 11,0" /><path class="s1" d="M0,10 6,10 9,0 20,0" /></g><g id="vvv-4"><path class="s7" d="M20,20 0,20 0,0 20,0" /><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vm0-4"><path class="s7" d="M0,20 0,0 3,0 9,20" /><path class="s1" d="M0,0 3,0 9,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vm1-4"><path class="s7" d="M0,0 0,20 3,20 9,0" /><path class="s1" d="M0,0 20,0" /><path class="s1" d="M0,20 3,20 9,0" /></g><g id="vmx-4"><path class="s7" d="M0,0 0,20 3,20 6,10 3,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 7,8" /><path class="s2" d="M10,0 9,1" /></g><g id="vmd-4"><path class="s7" d="m0,0 0,20 20,0 C 10,20 7,10 3,0" /><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vmu-4"><path class="s7" d="m0,0 0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="m0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vmz-4"><path class="s7" d="M0,0 3,0 C 10,10 15,10 20,10 15,10 10,10 3,20 L 0,20" /><path class="s1" d="m0,0 3,0 c 7,10 12,10 17,10" /><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="vvv-5"><path class="s8" d="M20,20 0,20 0,0 20,0" /><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vm0-5"><path class="s8" d="M0,20 0,0 3,0 9,20" /><path class="s1" d="M0,0 3,0 9,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vm1-5"><path class="s8" d="M0,0 0,20 3,20 9,0" /><path class="s1" d="M0,0 20,0" /><path class="s1" d="M0,20 3,20 9,0" /></g><g id="vmx-5"><path class="s8" d="M0,0 0,20 3,20 6,10 3,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 7,8" /><path class="s2" d="M10,0 9,1" /></g><g id="vmd-5"><path class="s8" d="m0,0 0,20 20,0 C 10,20 7,10 3,0" /><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vmu-5"><path class="s8" d="m0,0 0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="m0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vmz-5"><path class="s8" d="M0,0 3,0 C 10,10 15,10 20,10 15,10 10,10 3,20 L 0,20" /><path class="s1" d="m0,0 3,0 c 7,10 12,10 17,10" /><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="Pclk"><path class="s9" d="M-3,12 0,3 3,12 C 1,11 -1,11 -3,12 z" /><path class="s1" d="M0,20 0,0 20,0" /></g><g id="Nclk"><path class="s9" d="M-3,8 0,17 3,8 C 1,9 -1,9 -3,8 z" /><path class="s1" d="m0,0 0,20 20,0" /></g><g id="vvv-2"><path class="s10" d="M20,20 0,20 0,0 20,0" /><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vm0-2"><path class="s10" d="M0,20 0,0 3,0 9,20" /><path class="s1" d="M0,0 3,0 9,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vm1-2"><path class="s10" d="M0,0 0,20 3,20 9,0" /><path class="s1" d="M0,0 20,0" /><path class="s1" d="M0,20 3,20 9,0" /></g><g id="vmx-2"><path class="s10" d="M0,0 0,20 3,20 6,10 3,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 7,8" /><path class="s2" d="M10,0 9,1" /></g><g id="vmd-2"><path class="s10" d="m0,0 0,20 20,0 C 10,20 7,10 3,0" /><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vmu-2"><path class="s10" d="m0,0 0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="m0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vmz-2"><path class="s10" d="M0,0 3,0 C 10,10 15,10 20,10 15,10 10,10 3,20 L 0,20" /><path class="s1" d="m0,0 3,0 c 7,10 12,10 17,10" /><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="0mv-2"><path class="s10" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="1mv-2"><path class="s10" d="M2.875,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="xmv-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s2" d="M0,5 3.5,1.5" /><path class="s2" d="M0,10 4.5,5.5" /><path class="s2" d="M0,15 6,9" /><path class="s2" d="M0,20 4,16" /></g><g id="dmv-2"><path class="s10" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="umv-2"><path class="s10" d="M3,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="zmv-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="m6,10 3,10 11,0" /><path class="s1" d="M0,10 6,10 9,0 20,0" /></g><g id="vmv-3-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s6" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-4-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s7" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-5-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s8" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-2-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s10" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-2-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s10" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-2-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s10" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-2-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s10" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="arrow0"><path class="s11" d="m-12,-3 9,3 -9,3 c 1,-2 1,-4 0,-6 z" /><path class="s12" d="M0,0 -15,0" /></g><marker id="arrowhead" markerHeight="7" markerUnits="strokeWidth" markerWidth="10" orient="auto" refX="15" refY="0" style="fill:#0041c4" viewBox="0 -4 11 8"><path d="M0 -4 11 0 0 4z" /></marker><marker id="arrowtail" markerHeight="7" markerUnits="strokeWidth" markerWidth="10" orient="auto" refX="-15" refY="0" style="fill:#0041c4" viewBox="-11 -4 11 8"><path d="M0 -4 -11 0 0 4z" /></marker></defs><g id="waves_0"><g id="lanes_0" transform="translate(80.5,0.0)"><g id="wavelane_0_0" transform="translate(0,5)"><text class="info" text-anchor="end" x="-10" xml:space="preserve" y="15"><tspan>one</tspan></text><g id="wavelane_draw_0_0" transform="translate(0,0)"><use transform="translate(0)" xlink:href="#vvv-2" /><use transform="translate(20)" xlink:href="#vvv-2" /><use transform="translate(40)" xlink:href="#vmv-2-2" /><use transform="translate(60)" xlink:href="#vvv-2" /><use transform="translate(80)" xlink:href="#vmv-2-2" /><use transform="translate(100)" xlink:href="#vvv-2" /><use transform="translate(120)" xlink:href="#vmv-2-2" /><use transform="translate(140)" xlink:href="#vvv-2" /><use transform="translate(160)" xlink:href="#vmv-2-2" /><use transform="translate(180)" xlink:href="#vvv-2" /><use transform="translate(200)" xlink:href="#vmv-2-2" /><use transform="translate(220)" xlink:href="#vvv-2" /><use transform="translate(240)" xlink:href="#vmv-2-2" /><use transform="translate(260)" xlink:href="#vvv-2" /><use transform="translate(280)" xlink:href="#vmv-2-2" /><use transform="translate(300)" xlink:href="#vvv-2" /><use transform="translate(320)" xlink:href="#vmv-2-2" /><use transform="translate(340)" xlink:href="#vvv-2" /><use transform="translate(360)" xlink:href="#vmv-2-2" /><use transform="translate(380)" xlink:href="#vvv-2" /><text text-anchor="middle" x="6" xml:space="preserve" y="15"><tspan>x</tspan></text><text text-anchor="middle" x="66" xml:space="preserve" y="15"><tspan>1</tspan></text></g></g><g id="gmarks_0"><path d="m 0,0 0,30" id="gmark_0_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 40,0 0,30" id="gmark_1_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 80,0 0,30" id="gmark_2_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 120,0 0,30" id="gmark_3_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 160,0 0,30" id="gmark_4_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 200,0 0,30" id="gmark_5_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 240,0 0,30" id="gmark_6_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 280,0 0,30" id="gmark_7_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 320,0 0,30" id="gmark_8_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 360,0 0,30" id="gmark_9_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 400,0 0,30" id="gmark_10_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /></g><g id="wavegaps_0"><g id="wavegap_0_0" transform="translate(0,5)" /></g><g id="labels_0"><g id="labels_0_0" transform="translate(0,5)" /></g><g id="wavearcs_0" /></g><g id="groups_0" /></g></svg>',
                'complete' => 1,
                'created_at' => '2019-09-06 14:14:10',
                'updated_at' => '2019-09-06 14:20:38',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => '【入门】输出0',
                'content' => '建立一个没有输入,输出常为0的电路',
            'answer' => 'module top_module(output zero);

assign zero = 0;

endmodule',
            'template' => 'module top_module(output zero);

//write your code here

endmodule',
                'stimulation' => 'add wave zero
run 10',
                'difficulty' => 'Low',
                'total_solved' => 0,
                'total_submit' => 0,
                'tags' => '["入门", "赋值"]',
                'wavedrom' => '{"signal": [{"data": ["x", "0"], "name": "zero", "wave": "=========="}]}',
                'svg' => '<svg baseProfile="full" height="30" id="svgcontent_0" version="1.1" viewBox="0,0,500,30" width="500" xmlns="http://www.w3.org/2000/svg" xmlns:ev="http://www.w3.org/2001/xml-events" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><style type="text/css"><![CDATA[
text{font-size:11pt;
font-style:normal;
font-variant:normal;
font-weight:normal;
font-stretch:normal;
text-align:center;
fill-opacity:1;
font-family:Helvetica}
.muted{fill:#aaa}
.warning{fill:#f6b900}
.error{fill:#f60000}
.info{fill:#0041c4}
.success{fill:#00ab00}
.h1{font-size:33pt;font-weight:bold}
.h2{font-size:27pt;font-weight:bold}
.h3{font-size:20pt;font-weight:bold}
.h4{font-size:14pt;font-weight:bold}
.h5{font-size:11pt;font-weight:bold}
.h6{font-size:8pt;font-weight:bold}
.s1{fill:none;
stroke:#000;
stroke-width:1;
stroke-linecap:round;
stroke-linejoin:miter;
stroke-miterlimit:4;
stroke-opacity:1;
stroke-dasharray:none}
.s2{fill:none;
stroke:#000;
stroke-width:0.5;
stroke-linecap:round;
stroke-linejoin:miter;
stroke-miterlimit:4;
stroke-opacity:1;
stroke-dasharray:none}
.s3{color:#000;
fill:none;
stroke:#000;
stroke-width:1;
stroke-linecap:round;
stroke-linejoin:miter;
stroke-miterlimit:4;
stroke-opacity:1;
stroke-dasharray:1,3;
stroke-dashoffset:0;
marker:none;
visibility:visible;
display:inline;
overflow:visible;
enable-background:accumulate}
.s4{color:#000;
fill:none;
stroke:#000;
stroke-width:1;
stroke-linecap:round;
stroke-linejoin:miter;
stroke-miterlimit:4;
stroke-opacity:1;
stroke-dasharray:none;
stroke-dashoffset:0;
marker:none;
visibility:visible;
display:inline;
overflow:visible}
.s5{fill:#fff;stroke:none}
.s6{color:#000;
fill:#ffffb4;
fill-opacity:1;
fill-rule:nonzero;
stroke:none;
stroke-width:1px;
marker:none;
visibility:visible;
display:inline;
overflow:visible;
enable-background:accumulate}
.s7{color:#000;
fill:#ffe0b9;
fill-opacity:1;
fill-rule:nonzero;
stroke:none;
stroke-width:1px;
marker:none;
visibility:visible;
display:inline;
overflow:visible;
enable-background:accumulate}
.s8{color:#000;
fill:#b9e0ff;
fill-opacity:1;
fill-rule:nonzero;
stroke:none;
stroke-width:1px;
marker:none;
visibility:visible;
display:inline;
overflow:visible;
enable-background:accumulate}
.s9{fill:#000;
fill-opacity:1;
stroke:none}
.s10{color:#000;
fill:#fff;
fill-opacity:1;
fill-rule:nonzero;
stroke:none;
stroke-width:1px;
marker:none;
visibility:visible;
display:inline;
overflow:visible;
enable-background:accumulate}
.s11{fill:#0041c4;fill-opacity:1;stroke:none}
.s12{fill:none;
stroke:#0041c4;
stroke-width:1;
stroke-linecap:round;
stroke-linejoin:miter;
stroke-miterlimit:4;
stroke-opacity:1;
stroke-dasharray:none}
]]></style><g id="socket"><rect height="20" width="20" x="6" y="15" /></g><g id="pclk"><path class="s1" d="M0,20 0,0 20,0" /></g><g id="nclk"><path class="s1" d="m0,0 0,20 20,0" /></g><g id="000"><path class="s1" d="m0,20 20,0" /></g><g id="0m0"><path class="s1" d="m0,20 3,0 3,-10 3,10 11,0" /></g><g id="0m1"><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="0mx"><path class="s1" d="M3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 5,20" /><path class="s2" d="M20,0 4,16" /><path class="s2" d="M15,0 6,9" /><path class="s2" d="M10,0 9,1" /><path class="s1" d="m0,20 20,0" /></g><g id="0md"><path class="s3" d="m8,20 10,0" /><path class="s1" d="m0,20 5,0" /></g><g id="0mu"><path class="s1" d="m0,20 3,0 C 7,10 10.107603,0 20,0" /></g><g id="0mz"><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="111"><path class="s1" d="M0,0 20,0" /></g><g id="1m0"><path class="s1" d="m0,0 3,0 6,20 11,0" /></g><g id="1m1"><path class="s1" d="M0,0 3,0 6,10 9,0 20,0" /></g><g id="1mx"><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 6,9" /><path class="s2" d="M10,0 5,5" /><path class="s2" d="M3.5,1.5 5,0" /></g><g id="1md"><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /></g><g id="1mu"><path class="s1" d="M0,0 5,0" /><path class="s3" d="M8,0 18,0" /></g><g id="1mz"><path class="s1" d="m0,0 3,0 c 7,10 12,10 17,10" /></g><g id="xxx"><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /><path class="s2" d="M0,5 5,0" /><path class="s2" d="M0,10 10,0" /><path class="s2" d="M0,15 15,0" /><path class="s2" d="M0,20 20,0" /><path class="s2" d="M5,20 20,5" /><path class="s2" d="M10,20 20,10" /><path class="s2" d="m15,20 5,-5" /></g><g id="xm0"><path class="s1" d="M0,0 4,0 9,20" /><path class="s1" d="m0,20 20,0" /><path class="s2" d="M0,5 4,1" /><path class="s2" d="M0,10 5,5" /><path class="s2" d="M0,15 6,9" /><path class="s2" d="M0,20 7,13" /><path class="s2" d="M5,20 8,17" /></g><g id="xm1"><path class="s1" d="M0,0 20,0" /><path class="s1" d="M0,20 4,20 9,0" /><path class="s2" d="M0,5 5,0" /><path class="s2" d="M0,10 9,1" /><path class="s2" d="M0,15 7,8" /><path class="s2" d="M0,20 5,15" /></g><g id="xmx"><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /><path class="s2" d="M0,5 5,0" /><path class="s2" d="M0,10 10,0" /><path class="s2" d="M0,15 15,0" /><path class="s2" d="M0,20 20,0" /><path class="s2" d="M5,20 20,5" /><path class="s2" d="M10,20 20,10" /><path class="s2" d="m15,20 5,-5" /></g><g id="xmd"><path class="s1" d="m0,0 4,0 c 3,10 6,20 16,20" /><path class="s1" d="m0,20 20,0" /><path class="s2" d="M0,5 4,1" /><path class="s2" d="M0,10 5.5,4.5" /><path class="s2" d="M0,15 6.5,8.5" /><path class="s2" d="M0,20 8,12" /><path class="s2" d="m5,20 5,-5" /><path class="s2" d="m10,20 2.5,-2.5" /></g><g id="xmu"><path class="s1" d="M0,0 20,0" /><path class="s1" d="m0,20 4,0 C 7,10 10,0 20,0" /><path class="s2" d="M0,5 5,0" /><path class="s2" d="M0,10 10,0" /><path class="s2" d="M0,15 10,5" /><path class="s2" d="M0,20 6,14" /></g><g id="xmz"><path class="s1" d="m0,0 4,0 c 6,10 11,10 16,10" /><path class="s1" d="m0,20 4,0 C 10,10 15,10 20,10" /><path class="s2" d="M0,5 4.5,0.5" /><path class="s2" d="M0,10 6.5,3.5" /><path class="s2" d="M0,15 8.5,6.5" /><path class="s2" d="M0,20 11.5,8.5" /></g><g id="ddd"><path class="s3" d="m0,20 20,0" /></g><g id="dm0"><path class="s3" d="m0,20 10,0" /><path class="s1" d="m12,20 8,0" /></g><g id="dm1"><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="dmx"><path class="s1" d="M3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 5,20" /><path class="s2" d="M20,0 4,16" /><path class="s2" d="M15,0 6,9" /><path class="s2" d="M10,0 9,1" /><path class="s1" d="m0,20 20,0" /></g><g id="dmd"><path class="s3" d="m0,20 20,0" /></g><g id="dmu"><path class="s1" d="m0,20 3,0 C 7,10 10.107603,0 20,0" /></g><g id="dmz"><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="uuu"><path class="s3" d="M0,0 20,0" /></g><g id="um0"><path class="s1" d="m0,0 3,0 6,20 11,0" /></g><g id="um1"><path class="s3" d="M0,0 10,0" /><path class="s1" d="m12,0 8,0" /></g><g id="umx"><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 6,9" /><path class="s2" d="M10,0 5,5" /><path class="s2" d="M3.5,1.5 5,0" /></g><g id="umd"><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /></g><g id="umu"><path class="s3" d="M0,0 20,0" /></g><g id="umz"><path class="s4" d="m0,0 3,0 c 7,10 12,10 17,10" /></g><g id="zzz"><path class="s1" d="m0,10 20,0" /></g><g id="zm0"><path class="s1" d="m0,10 6,0 3,10 11,0" /></g><g id="zm1"><path class="s1" d="M0,10 6,10 9,0 20,0" /></g><g id="zmx"><path class="s1" d="m6,10 3,10 11,0" /><path class="s1" d="M0,10 6,10 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 6.5,8.5" /><path class="s2" d="M10,0 9,1" /></g><g id="zmd"><path class="s1" d="m0,10 7,0 c 3,5 8,10 13,10" /></g><g id="zmu"><path class="s1" d="m0,10 7,0 C 10,5 15,0 20,0" /></g><g id="zmz"><path class="s1" d="m0,10 20,0" /></g><g id="gap"><path class="s5" d="m7,-2 -4,0 c -5,0 -5,24 -10,24 l 4,0 C 2,22 2,-2 7,-2 z" /><path class="s1" d="M-7,22 C -2,22 -2,-2 3,-2" /><path class="s1" d="M-3,22 C 2,22 2,-2 7,-2" /></g><g id="0mv-3"><path class="s6" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="1mv-3"><path class="s6" d="M2.875,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="xmv-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s2" d="M0,5 3.5,1.5" /><path class="s2" d="M0,10 4.5,5.5" /><path class="s2" d="M0,15 6,9" /><path class="s2" d="M0,20 4,16" /></g><g id="dmv-3"><path class="s6" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="umv-3"><path class="s6" d="M3,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="zmv-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="m6,10 3,10 11,0" /><path class="s1" d="M0,10 6,10 9,0 20,0" /></g><g id="vvv-3"><path class="s6" d="M20,20 0,20 0,0 20,0" /><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vm0-3"><path class="s6" d="M0,20 0,0 3,0 9,20" /><path class="s1" d="M0,0 3,0 9,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vm1-3"><path class="s6" d="M0,0 0,20 3,20 9,0" /><path class="s1" d="M0,0 20,0" /><path class="s1" d="M0,20 3,20 9,0" /></g><g id="vmx-3"><path class="s6" d="M0,0 0,20 3,20 6,10 3,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 7,8" /><path class="s2" d="M10,0 9,1" /></g><g id="vmd-3"><path class="s6" d="m0,0 0,20 20,0 C 10,20 7,10 3,0" /><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vmu-3"><path class="s6" d="m0,0 0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="m0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vmz-3"><path class="s6" d="M0,0 3,0 C 10,10 15,10 20,10 15,10 10,10 3,20 L 0,20" /><path class="s1" d="m0,0 3,0 c 7,10 12,10 17,10" /><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="vmv-3-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s6" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-3-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s6" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-3-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s6" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-4-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s7" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-4-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s7" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-4-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s7" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-5-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s8" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-5-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s8" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-5-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s8" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="0mv-4"><path class="s7" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="1mv-4"><path class="s7" d="M2.875,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="xmv-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s2" d="M0,5 3.5,1.5" /><path class="s2" d="M0,10 4.5,5.5" /><path class="s2" d="M0,15 6,9" /><path class="s2" d="M0,20 4,16" /></g><g id="dmv-4"><path class="s7" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="umv-4"><path class="s7" d="M3,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="zmv-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="m6,10 3,10 11,0" /><path class="s1" d="M0,10 6,10 9,0 20,0" /></g><g id="0mv-5"><path class="s8" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="1mv-5"><path class="s8" d="M2.875,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="xmv-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s2" d="M0,5 3.5,1.5" /><path class="s2" d="M0,10 4.5,5.5" /><path class="s2" d="M0,15 6,9" /><path class="s2" d="M0,20 4,16" /></g><g id="dmv-5"><path class="s8" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="umv-5"><path class="s8" d="M3,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="zmv-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="m6,10 3,10 11,0" /><path class="s1" d="M0,10 6,10 9,0 20,0" /></g><g id="vvv-4"><path class="s7" d="M20,20 0,20 0,0 20,0" /><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vm0-4"><path class="s7" d="M0,20 0,0 3,0 9,20" /><path class="s1" d="M0,0 3,0 9,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vm1-4"><path class="s7" d="M0,0 0,20 3,20 9,0" /><path class="s1" d="M0,0 20,0" /><path class="s1" d="M0,20 3,20 9,0" /></g><g id="vmx-4"><path class="s7" d="M0,0 0,20 3,20 6,10 3,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 7,8" /><path class="s2" d="M10,0 9,1" /></g><g id="vmd-4"><path class="s7" d="m0,0 0,20 20,0 C 10,20 7,10 3,0" /><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vmu-4"><path class="s7" d="m0,0 0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="m0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vmz-4"><path class="s7" d="M0,0 3,0 C 10,10 15,10 20,10 15,10 10,10 3,20 L 0,20" /><path class="s1" d="m0,0 3,0 c 7,10 12,10 17,10" /><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="vvv-5"><path class="s8" d="M20,20 0,20 0,0 20,0" /><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vm0-5"><path class="s8" d="M0,20 0,0 3,0 9,20" /><path class="s1" d="M0,0 3,0 9,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vm1-5"><path class="s8" d="M0,0 0,20 3,20 9,0" /><path class="s1" d="M0,0 20,0" /><path class="s1" d="M0,20 3,20 9,0" /></g><g id="vmx-5"><path class="s8" d="M0,0 0,20 3,20 6,10 3,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 7,8" /><path class="s2" d="M10,0 9,1" /></g><g id="vmd-5"><path class="s8" d="m0,0 0,20 20,0 C 10,20 7,10 3,0" /><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vmu-5"><path class="s8" d="m0,0 0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="m0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vmz-5"><path class="s8" d="M0,0 3,0 C 10,10 15,10 20,10 15,10 10,10 3,20 L 0,20" /><path class="s1" d="m0,0 3,0 c 7,10 12,10 17,10" /><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="Pclk"><path class="s9" d="M-3,12 0,3 3,12 C 1,11 -1,11 -3,12 z" /><path class="s1" d="M0,20 0,0 20,0" /></g><g id="Nclk"><path class="s9" d="M-3,8 0,17 3,8 C 1,9 -1,9 -3,8 z" /><path class="s1" d="m0,0 0,20 20,0" /></g><g id="vvv-2"><path class="s10" d="M20,20 0,20 0,0 20,0" /><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vm0-2"><path class="s10" d="M0,20 0,0 3,0 9,20" /><path class="s1" d="M0,0 3,0 9,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vm1-2"><path class="s10" d="M0,0 0,20 3,20 9,0" /><path class="s1" d="M0,0 20,0" /><path class="s1" d="M0,20 3,20 9,0" /></g><g id="vmx-2"><path class="s10" d="M0,0 0,20 3,20 6,10 3,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 7,8" /><path class="s2" d="M10,0 9,1" /></g><g id="vmd-2"><path class="s10" d="m0,0 0,20 20,0 C 10,20 7,10 3,0" /><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vmu-2"><path class="s10" d="m0,0 0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="m0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vmz-2"><path class="s10" d="M0,0 3,0 C 10,10 15,10 20,10 15,10 10,10 3,20 L 0,20" /><path class="s1" d="m0,0 3,0 c 7,10 12,10 17,10" /><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="0mv-2"><path class="s10" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="1mv-2"><path class="s10" d="M2.875,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="xmv-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s2" d="M0,5 3.5,1.5" /><path class="s2" d="M0,10 4.5,5.5" /><path class="s2" d="M0,15 6,9" /><path class="s2" d="M0,20 4,16" /></g><g id="dmv-2"><path class="s10" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="umv-2"><path class="s10" d="M3,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="zmv-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="m6,10 3,10 11,0" /><path class="s1" d="M0,10 6,10 9,0 20,0" /></g><g id="vmv-3-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s6" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-4-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s7" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-5-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s8" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-2-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s10" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-2-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s10" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-2-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s10" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-2-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s10" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="arrow0"><path class="s11" d="m-12,-3 9,3 -9,3 c 1,-2 1,-4 0,-6 z" /><path class="s12" d="M0,0 -15,0" /></g><marker id="arrowhead" markerHeight="7" markerUnits="strokeWidth" markerWidth="10" orient="auto" refX="15" refY="0" style="fill:#0041c4" viewBox="0 -4 11 8"><path d="M0 -4 11 0 0 4z" /></marker><marker id="arrowtail" markerHeight="7" markerUnits="strokeWidth" markerWidth="10" orient="auto" refX="-15" refY="0" style="fill:#0041c4" viewBox="-11 -4 11 8"><path d="M0 -4 -11 0 0 4z" /></marker></defs><g id="waves_0"><g id="lanes_0" transform="translate(80.5,0.0)"><g id="wavelane_0_0" transform="translate(0,5)"><text class="info" text-anchor="end" x="-10" xml:space="preserve" y="15"><tspan>zero</tspan></text><g id="wavelane_draw_0_0" transform="translate(0,0)"><use transform="translate(0)" xlink:href="#vvv-2" /><use transform="translate(20)" xlink:href="#vvv-2" /><use transform="translate(40)" xlink:href="#vmv-2-2" /><use transform="translate(60)" xlink:href="#vvv-2" /><use transform="translate(80)" xlink:href="#vmv-2-2" /><use transform="translate(100)" xlink:href="#vvv-2" /><use transform="translate(120)" xlink:href="#vmv-2-2" /><use transform="translate(140)" xlink:href="#vvv-2" /><use transform="translate(160)" xlink:href="#vmv-2-2" /><use transform="translate(180)" xlink:href="#vvv-2" /><use transform="translate(200)" xlink:href="#vmv-2-2" /><use transform="translate(220)" xlink:href="#vvv-2" /><use transform="translate(240)" xlink:href="#vmv-2-2" /><use transform="translate(260)" xlink:href="#vvv-2" /><use transform="translate(280)" xlink:href="#vmv-2-2" /><use transform="translate(300)" xlink:href="#vvv-2" /><use transform="translate(320)" xlink:href="#vmv-2-2" /><use transform="translate(340)" xlink:href="#vvv-2" /><use transform="translate(360)" xlink:href="#vmv-2-2" /><use transform="translate(380)" xlink:href="#vvv-2" /><text text-anchor="middle" x="6" xml:space="preserve" y="15"><tspan>x</tspan></text><text text-anchor="middle" x="66" xml:space="preserve" y="15"><tspan>0</tspan></text></g></g><g id="gmarks_0"><path d="m 0,0 0,30" id="gmark_0_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 40,0 0,30" id="gmark_1_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 80,0 0,30" id="gmark_2_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 120,0 0,30" id="gmark_3_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 160,0 0,30" id="gmark_4_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 200,0 0,30" id="gmark_5_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 240,0 0,30" id="gmark_6_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 280,0 0,30" id="gmark_7_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 320,0 0,30" id="gmark_8_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 360,0 0,30" id="gmark_9_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 400,0 0,30" id="gmark_10_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /></g><g id="wavegaps_0"><g id="wavegap_0_0" transform="translate(0,5)" /></g><g id="labels_0"><g id="labels_0_0" transform="translate(0,5)" /></g><g id="wavearcs_0" /></g><g id="groups_0" /></g></svg>',
                'complete' => 1,
                'created_at' => '2019-09-06 14:36:42',
                'updated_at' => '2019-09-06 14:37:49',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => '带有图片的测试题目',
                'content' => '<p><img alt="屏幕快照 2019-09-07 上午11.04.40.jpg" src="/storage/images/7ac06a36354162ee0683c39e0f5184af.jpg" width="400" height="200.4206098843323"><br></p>',
            'answer' => 'module top_module(output one);

assign one = 1;

endmodule',
            'template' => 'module top_module(output one)

assign one = [ fix me ];

endmodule',
                'stimulation' => 'add wave one
run 10',
                'difficulty' => 'Mid',
                'total_solved' => 0,
                'total_submit' => 0,
                'tags' => '["触发器"]',
                'wavedrom' => '{"signal": [{"data": ["x", "1"], "name": "one", "wave": "=========="}]}',
                'svg' => '<svg baseProfile="full" height="30" id="svgcontent_0" version="1.1" viewBox="0,0,500,30" width="500" xmlns="http://www.w3.org/2000/svg" xmlns:ev="http://www.w3.org/2001/xml-events" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><style type="text/css"><![CDATA[
text{font-size:11pt;
font-style:normal;
font-variant:normal;
font-weight:normal;
font-stretch:normal;
text-align:center;
fill-opacity:1;
font-family:Helvetica}
.muted{fill:#aaa}
.warning{fill:#f6b900}
.error{fill:#f60000}
.info{fill:#0041c4}
.success{fill:#00ab00}
.h1{font-size:33pt;font-weight:bold}
.h2{font-size:27pt;font-weight:bold}
.h3{font-size:20pt;font-weight:bold}
.h4{font-size:14pt;font-weight:bold}
.h5{font-size:11pt;font-weight:bold}
.h6{font-size:8pt;font-weight:bold}
.s1{fill:none;
stroke:#000;
stroke-width:1;
stroke-linecap:round;
stroke-linejoin:miter;
stroke-miterlimit:4;
stroke-opacity:1;
stroke-dasharray:none}
.s2{fill:none;
stroke:#000;
stroke-width:0.5;
stroke-linecap:round;
stroke-linejoin:miter;
stroke-miterlimit:4;
stroke-opacity:1;
stroke-dasharray:none}
.s3{color:#000;
fill:none;
stroke:#000;
stroke-width:1;
stroke-linecap:round;
stroke-linejoin:miter;
stroke-miterlimit:4;
stroke-opacity:1;
stroke-dasharray:1,3;
stroke-dashoffset:0;
marker:none;
visibility:visible;
display:inline;
overflow:visible;
enable-background:accumulate}
.s4{color:#000;
fill:none;
stroke:#000;
stroke-width:1;
stroke-linecap:round;
stroke-linejoin:miter;
stroke-miterlimit:4;
stroke-opacity:1;
stroke-dasharray:none;
stroke-dashoffset:0;
marker:none;
visibility:visible;
display:inline;
overflow:visible}
.s5{fill:#fff;stroke:none}
.s6{color:#000;
fill:#ffffb4;
fill-opacity:1;
fill-rule:nonzero;
stroke:none;
stroke-width:1px;
marker:none;
visibility:visible;
display:inline;
overflow:visible;
enable-background:accumulate}
.s7{color:#000;
fill:#ffe0b9;
fill-opacity:1;
fill-rule:nonzero;
stroke:none;
stroke-width:1px;
marker:none;
visibility:visible;
display:inline;
overflow:visible;
enable-background:accumulate}
.s8{color:#000;
fill:#b9e0ff;
fill-opacity:1;
fill-rule:nonzero;
stroke:none;
stroke-width:1px;
marker:none;
visibility:visible;
display:inline;
overflow:visible;
enable-background:accumulate}
.s9{fill:#000;
fill-opacity:1;
stroke:none}
.s10{color:#000;
fill:#fff;
fill-opacity:1;
fill-rule:nonzero;
stroke:none;
stroke-width:1px;
marker:none;
visibility:visible;
display:inline;
overflow:visible;
enable-background:accumulate}
.s11{fill:#0041c4;fill-opacity:1;stroke:none}
.s12{fill:none;
stroke:#0041c4;
stroke-width:1;
stroke-linecap:round;
stroke-linejoin:miter;
stroke-miterlimit:4;
stroke-opacity:1;
stroke-dasharray:none}
]]></style><g id="socket"><rect height="20" width="20" x="6" y="15" /></g><g id="pclk"><path class="s1" d="M0,20 0,0 20,0" /></g><g id="nclk"><path class="s1" d="m0,0 0,20 20,0" /></g><g id="000"><path class="s1" d="m0,20 20,0" /></g><g id="0m0"><path class="s1" d="m0,20 3,0 3,-10 3,10 11,0" /></g><g id="0m1"><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="0mx"><path class="s1" d="M3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 5,20" /><path class="s2" d="M20,0 4,16" /><path class="s2" d="M15,0 6,9" /><path class="s2" d="M10,0 9,1" /><path class="s1" d="m0,20 20,0" /></g><g id="0md"><path class="s3" d="m8,20 10,0" /><path class="s1" d="m0,20 5,0" /></g><g id="0mu"><path class="s1" d="m0,20 3,0 C 7,10 10.107603,0 20,0" /></g><g id="0mz"><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="111"><path class="s1" d="M0,0 20,0" /></g><g id="1m0"><path class="s1" d="m0,0 3,0 6,20 11,0" /></g><g id="1m1"><path class="s1" d="M0,0 3,0 6,10 9,0 20,0" /></g><g id="1mx"><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 6,9" /><path class="s2" d="M10,0 5,5" /><path class="s2" d="M3.5,1.5 5,0" /></g><g id="1md"><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /></g><g id="1mu"><path class="s1" d="M0,0 5,0" /><path class="s3" d="M8,0 18,0" /></g><g id="1mz"><path class="s1" d="m0,0 3,0 c 7,10 12,10 17,10" /></g><g id="xxx"><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /><path class="s2" d="M0,5 5,0" /><path class="s2" d="M0,10 10,0" /><path class="s2" d="M0,15 15,0" /><path class="s2" d="M0,20 20,0" /><path class="s2" d="M5,20 20,5" /><path class="s2" d="M10,20 20,10" /><path class="s2" d="m15,20 5,-5" /></g><g id="xm0"><path class="s1" d="M0,0 4,0 9,20" /><path class="s1" d="m0,20 20,0" /><path class="s2" d="M0,5 4,1" /><path class="s2" d="M0,10 5,5" /><path class="s2" d="M0,15 6,9" /><path class="s2" d="M0,20 7,13" /><path class="s2" d="M5,20 8,17" /></g><g id="xm1"><path class="s1" d="M0,0 20,0" /><path class="s1" d="M0,20 4,20 9,0" /><path class="s2" d="M0,5 5,0" /><path class="s2" d="M0,10 9,1" /><path class="s2" d="M0,15 7,8" /><path class="s2" d="M0,20 5,15" /></g><g id="xmx"><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /><path class="s2" d="M0,5 5,0" /><path class="s2" d="M0,10 10,0" /><path class="s2" d="M0,15 15,0" /><path class="s2" d="M0,20 20,0" /><path class="s2" d="M5,20 20,5" /><path class="s2" d="M10,20 20,10" /><path class="s2" d="m15,20 5,-5" /></g><g id="xmd"><path class="s1" d="m0,0 4,0 c 3,10 6,20 16,20" /><path class="s1" d="m0,20 20,0" /><path class="s2" d="M0,5 4,1" /><path class="s2" d="M0,10 5.5,4.5" /><path class="s2" d="M0,15 6.5,8.5" /><path class="s2" d="M0,20 8,12" /><path class="s2" d="m5,20 5,-5" /><path class="s2" d="m10,20 2.5,-2.5" /></g><g id="xmu"><path class="s1" d="M0,0 20,0" /><path class="s1" d="m0,20 4,0 C 7,10 10,0 20,0" /><path class="s2" d="M0,5 5,0" /><path class="s2" d="M0,10 10,0" /><path class="s2" d="M0,15 10,5" /><path class="s2" d="M0,20 6,14" /></g><g id="xmz"><path class="s1" d="m0,0 4,0 c 6,10 11,10 16,10" /><path class="s1" d="m0,20 4,0 C 10,10 15,10 20,10" /><path class="s2" d="M0,5 4.5,0.5" /><path class="s2" d="M0,10 6.5,3.5" /><path class="s2" d="M0,15 8.5,6.5" /><path class="s2" d="M0,20 11.5,8.5" /></g><g id="ddd"><path class="s3" d="m0,20 20,0" /></g><g id="dm0"><path class="s3" d="m0,20 10,0" /><path class="s1" d="m12,20 8,0" /></g><g id="dm1"><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="dmx"><path class="s1" d="M3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 5,20" /><path class="s2" d="M20,0 4,16" /><path class="s2" d="M15,0 6,9" /><path class="s2" d="M10,0 9,1" /><path class="s1" d="m0,20 20,0" /></g><g id="dmd"><path class="s3" d="m0,20 20,0" /></g><g id="dmu"><path class="s1" d="m0,20 3,0 C 7,10 10.107603,0 20,0" /></g><g id="dmz"><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="uuu"><path class="s3" d="M0,0 20,0" /></g><g id="um0"><path class="s1" d="m0,0 3,0 6,20 11,0" /></g><g id="um1"><path class="s3" d="M0,0 10,0" /><path class="s1" d="m12,0 8,0" /></g><g id="umx"><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 6,9" /><path class="s2" d="M10,0 5,5" /><path class="s2" d="M3.5,1.5 5,0" /></g><g id="umd"><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /></g><g id="umu"><path class="s3" d="M0,0 20,0" /></g><g id="umz"><path class="s4" d="m0,0 3,0 c 7,10 12,10 17,10" /></g><g id="zzz"><path class="s1" d="m0,10 20,0" /></g><g id="zm0"><path class="s1" d="m0,10 6,0 3,10 11,0" /></g><g id="zm1"><path class="s1" d="M0,10 6,10 9,0 20,0" /></g><g id="zmx"><path class="s1" d="m6,10 3,10 11,0" /><path class="s1" d="M0,10 6,10 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 6.5,8.5" /><path class="s2" d="M10,0 9,1" /></g><g id="zmd"><path class="s1" d="m0,10 7,0 c 3,5 8,10 13,10" /></g><g id="zmu"><path class="s1" d="m0,10 7,0 C 10,5 15,0 20,0" /></g><g id="zmz"><path class="s1" d="m0,10 20,0" /></g><g id="gap"><path class="s5" d="m7,-2 -4,0 c -5,0 -5,24 -10,24 l 4,0 C 2,22 2,-2 7,-2 z" /><path class="s1" d="M-7,22 C -2,22 -2,-2 3,-2" /><path class="s1" d="M-3,22 C 2,22 2,-2 7,-2" /></g><g id="0mv-3"><path class="s6" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="1mv-3"><path class="s6" d="M2.875,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="xmv-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s2" d="M0,5 3.5,1.5" /><path class="s2" d="M0,10 4.5,5.5" /><path class="s2" d="M0,15 6,9" /><path class="s2" d="M0,20 4,16" /></g><g id="dmv-3"><path class="s6" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="umv-3"><path class="s6" d="M3,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="zmv-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="m6,10 3,10 11,0" /><path class="s1" d="M0,10 6,10 9,0 20,0" /></g><g id="vvv-3"><path class="s6" d="M20,20 0,20 0,0 20,0" /><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vm0-3"><path class="s6" d="M0,20 0,0 3,0 9,20" /><path class="s1" d="M0,0 3,0 9,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vm1-3"><path class="s6" d="M0,0 0,20 3,20 9,0" /><path class="s1" d="M0,0 20,0" /><path class="s1" d="M0,20 3,20 9,0" /></g><g id="vmx-3"><path class="s6" d="M0,0 0,20 3,20 6,10 3,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 7,8" /><path class="s2" d="M10,0 9,1" /></g><g id="vmd-3"><path class="s6" d="m0,0 0,20 20,0 C 10,20 7,10 3,0" /><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vmu-3"><path class="s6" d="m0,0 0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="m0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vmz-3"><path class="s6" d="M0,0 3,0 C 10,10 15,10 20,10 15,10 10,10 3,20 L 0,20" /><path class="s1" d="m0,0 3,0 c 7,10 12,10 17,10" /><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="vmv-3-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s6" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-3-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s6" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-3-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s6" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-4-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s7" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-4-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s7" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-4-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s7" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-5-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s8" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-5-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s8" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-5-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s8" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="0mv-4"><path class="s7" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="1mv-4"><path class="s7" d="M2.875,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="xmv-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s2" d="M0,5 3.5,1.5" /><path class="s2" d="M0,10 4.5,5.5" /><path class="s2" d="M0,15 6,9" /><path class="s2" d="M0,20 4,16" /></g><g id="dmv-4"><path class="s7" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="umv-4"><path class="s7" d="M3,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="zmv-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="m6,10 3,10 11,0" /><path class="s1" d="M0,10 6,10 9,0 20,0" /></g><g id="0mv-5"><path class="s8" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="1mv-5"><path class="s8" d="M2.875,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="xmv-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s2" d="M0,5 3.5,1.5" /><path class="s2" d="M0,10 4.5,5.5" /><path class="s2" d="M0,15 6,9" /><path class="s2" d="M0,20 4,16" /></g><g id="dmv-5"><path class="s8" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="umv-5"><path class="s8" d="M3,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="zmv-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="m6,10 3,10 11,0" /><path class="s1" d="M0,10 6,10 9,0 20,0" /></g><g id="vvv-4"><path class="s7" d="M20,20 0,20 0,0 20,0" /><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vm0-4"><path class="s7" d="M0,20 0,0 3,0 9,20" /><path class="s1" d="M0,0 3,0 9,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vm1-4"><path class="s7" d="M0,0 0,20 3,20 9,0" /><path class="s1" d="M0,0 20,0" /><path class="s1" d="M0,20 3,20 9,0" /></g><g id="vmx-4"><path class="s7" d="M0,0 0,20 3,20 6,10 3,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 7,8" /><path class="s2" d="M10,0 9,1" /></g><g id="vmd-4"><path class="s7" d="m0,0 0,20 20,0 C 10,20 7,10 3,0" /><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vmu-4"><path class="s7" d="m0,0 0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="m0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vmz-4"><path class="s7" d="M0,0 3,0 C 10,10 15,10 20,10 15,10 10,10 3,20 L 0,20" /><path class="s1" d="m0,0 3,0 c 7,10 12,10 17,10" /><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="vvv-5"><path class="s8" d="M20,20 0,20 0,0 20,0" /><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vm0-5"><path class="s8" d="M0,20 0,0 3,0 9,20" /><path class="s1" d="M0,0 3,0 9,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vm1-5"><path class="s8" d="M0,0 0,20 3,20 9,0" /><path class="s1" d="M0,0 20,0" /><path class="s1" d="M0,20 3,20 9,0" /></g><g id="vmx-5"><path class="s8" d="M0,0 0,20 3,20 6,10 3,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 7,8" /><path class="s2" d="M10,0 9,1" /></g><g id="vmd-5"><path class="s8" d="m0,0 0,20 20,0 C 10,20 7,10 3,0" /><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vmu-5"><path class="s8" d="m0,0 0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="m0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vmz-5"><path class="s8" d="M0,0 3,0 C 10,10 15,10 20,10 15,10 10,10 3,20 L 0,20" /><path class="s1" d="m0,0 3,0 c 7,10 12,10 17,10" /><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="Pclk"><path class="s9" d="M-3,12 0,3 3,12 C 1,11 -1,11 -3,12 z" /><path class="s1" d="M0,20 0,0 20,0" /></g><g id="Nclk"><path class="s9" d="M-3,8 0,17 3,8 C 1,9 -1,9 -3,8 z" /><path class="s1" d="m0,0 0,20 20,0" /></g><g id="vvv-2"><path class="s10" d="M20,20 0,20 0,0 20,0" /><path class="s1" d="m0,20 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vm0-2"><path class="s10" d="M0,20 0,0 3,0 9,20" /><path class="s1" d="M0,0 3,0 9,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vm1-2"><path class="s10" d="M0,0 0,20 3,20 9,0" /><path class="s1" d="M0,0 20,0" /><path class="s1" d="M0,20 3,20 9,0" /></g><g id="vmx-2"><path class="s10" d="M0,0 0,20 3,20 6,10 3,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s2" d="m20,15 -5,5" /><path class="s2" d="M20,10 10,20" /><path class="s2" d="M20,5 8,17" /><path class="s2" d="M20,0 7,13" /><path class="s2" d="M15,0 7,8" /><path class="s2" d="M10,0 9,1" /></g><g id="vmd-2"><path class="s10" d="m0,0 0,20 20,0 C 10,20 7,10 3,0" /><path class="s1" d="m0,0 3,0 c 4,10 7,20 17,20" /><path class="s1" d="m0,20 20,0" /></g><g id="vmu-2"><path class="s10" d="m0,0 0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="m0,20 3,0 C 7,10 10,0 20,0" /><path class="s1" d="M0,0 20,0" /></g><g id="vmz-2"><path class="s10" d="M0,0 3,0 C 10,10 15,10 20,10 15,10 10,10 3,20 L 0,20" /><path class="s1" d="m0,0 3,0 c 7,10 12,10 17,10" /><path class="s1" d="m0,20 3,0 C 10,10 15,10 20,10" /></g><g id="0mv-2"><path class="s10" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="1mv-2"><path class="s10" d="M2.875,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="xmv-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="M0,20 3,20 9,0 20,0" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s2" d="M0,5 3.5,1.5" /><path class="s2" d="M0,10 4.5,5.5" /><path class="s2" d="M0,15 6,9" /><path class="s2" d="M0,20 4,16" /></g><g id="dmv-2"><path class="s10" d="M9,0 20,0 20,20 3,20 z" /><path class="s1" d="M3,20 9,0 20,0" /><path class="s1" d="m0,20 20,0" /></g><g id="umv-2"><path class="s10" d="M3,0 20,0 20,20 9,20 z" /><path class="s1" d="m3,0 6,20 11,0" /><path class="s1" d="M0,0 20,0" /></g><g id="zmv-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s1" d="m6,10 3,10 11,0" /><path class="s1" d="M0,10 6,10 9,0 20,0" /></g><g id="vmv-3-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s6" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-4-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s7" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-5-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s8" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-2-3"><path class="s6" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s10" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-2-4"><path class="s7" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s10" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-2-5"><path class="s8" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s10" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="vmv-2-2"><path class="s10" d="M9,0 20,0 20,20 9,20 6,10 z" /><path class="s10" d="M3,0 0,0 0,20 3,20 6,10 z" /><path class="s1" d="m0,0 3,0 6,20 11,0" /><path class="s1" d="M0,20 3,20 9,0 20,0" /></g><g id="arrow0"><path class="s11" d="m-12,-3 9,3 -9,3 c 1,-2 1,-4 0,-6 z" /><path class="s12" d="M0,0 -15,0" /></g><marker id="arrowhead" markerHeight="7" markerUnits="strokeWidth" markerWidth="10" orient="auto" refX="15" refY="0" style="fill:#0041c4" viewBox="0 -4 11 8"><path d="M0 -4 11 0 0 4z" /></marker><marker id="arrowtail" markerHeight="7" markerUnits="strokeWidth" markerWidth="10" orient="auto" refX="-15" refY="0" style="fill:#0041c4" viewBox="-11 -4 11 8"><path d="M0 -4 -11 0 0 4z" /></marker></defs><g id="waves_0"><g id="lanes_0" transform="translate(80.5,0.0)"><g id="wavelane_0_0" transform="translate(0,5)"><text class="info" text-anchor="end" x="-10" xml:space="preserve" y="15"><tspan>one</tspan></text><g id="wavelane_draw_0_0" transform="translate(0,0)"><use transform="translate(0)" xlink:href="#vvv-2" /><use transform="translate(20)" xlink:href="#vvv-2" /><use transform="translate(40)" xlink:href="#vmv-2-2" /><use transform="translate(60)" xlink:href="#vvv-2" /><use transform="translate(80)" xlink:href="#vmv-2-2" /><use transform="translate(100)" xlink:href="#vvv-2" /><use transform="translate(120)" xlink:href="#vmv-2-2" /><use transform="translate(140)" xlink:href="#vvv-2" /><use transform="translate(160)" xlink:href="#vmv-2-2" /><use transform="translate(180)" xlink:href="#vvv-2" /><use transform="translate(200)" xlink:href="#vmv-2-2" /><use transform="translate(220)" xlink:href="#vvv-2" /><use transform="translate(240)" xlink:href="#vmv-2-2" /><use transform="translate(260)" xlink:href="#vvv-2" /><use transform="translate(280)" xlink:href="#vmv-2-2" /><use transform="translate(300)" xlink:href="#vvv-2" /><use transform="translate(320)" xlink:href="#vmv-2-2" /><use transform="translate(340)" xlink:href="#vvv-2" /><use transform="translate(360)" xlink:href="#vmv-2-2" /><use transform="translate(380)" xlink:href="#vvv-2" /><text text-anchor="middle" x="6" xml:space="preserve" y="15"><tspan>x</tspan></text><text text-anchor="middle" x="66" xml:space="preserve" y="15"><tspan>1</tspan></text></g></g><g id="gmarks_0"><path d="m 0,0 0,30" id="gmark_0_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 40,0 0,30" id="gmark_1_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 80,0 0,30" id="gmark_2_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 120,0 0,30" id="gmark_3_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 160,0 0,30" id="gmark_4_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 200,0 0,30" id="gmark_5_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 240,0 0,30" id="gmark_6_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 280,0 0,30" id="gmark_7_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 320,0 0,30" id="gmark_8_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 360,0 0,30" id="gmark_9_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /><path d="m 400,0 0,30" id="gmark_10_0" style="stroke:#888;stroke-width:0.5;stroke-dasharray:1,3" /></g><g id="wavegaps_0"><g id="wavegap_0_0" transform="translate(0,5)" /></g><g id="labels_0"><g id="labels_0_0" transform="translate(0,5)" /></g><g id="wavearcs_0" /></g><g id="groups_0" /></g></svg>',
                'complete' => 1,
                'created_at' => '2019-09-09 02:55:39',
                'updated_at' => '2019-09-09 02:57:39',
            ),
        ));
        
        
    }
}
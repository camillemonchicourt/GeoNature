import { Component, OnInit } from '@angular/core';
import {GeoJSON} from 'leaflet';
import { SearchService } from './search.service';
import { MapListService } from '../GN2Common/map-list/map-list.service';

@Component({
    selector: 'pnx-synthese',
    templateUrl: 'synthese.component.html',

})

export class SyntheseComponent implements OnInit {
    public syntheseDataStore: GeoJSON;

    constructor(
        public searchService: SearchService,
        private _mapListService: MapListService
    ) {}

    loadAndStoreData(formParams) {
        this.searchService.dataLoaded = false;
        this.searchService.getSyntheseData(formParams).subscribe(data => {
            this.syntheseDataStore = data;
            this._mapListService.loadTableData(data);
            this._mapListService.idName = 'id_synthese';
            this.searchService.dataLoaded = true;
        });
    }
    ngOnInit() {
        this.loadAndStoreData({});
    }

}

